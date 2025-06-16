
<?php include_once('include/header.php'); ?>
<?php include_once('include/auth_check.php') ?>
<section class="section section-lg bg-default" style="margin-top: 143px;">
  <div class="container container-bigger">
    <div class="search mb-5 ">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Panel -->

					<div class="search_panel active">
						<form action="seat_plan.php" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>From</div>
								<select class="destination search_input" id="area_from" name="area_from" required="required">
									<?php
									$data = $mysqli->common_select('area');
									if(!$data['error']) {
										foreach($data['data'] as $d) {
									?>
									<option value="<?= $d->id ?>" <?= $_GET['area_from']==$d->id?"selected":"" ?>><?= $d->name ?></option>
									<?php } } ?>
								</select>
							</div>
							<div class="search_item">
								<div>To</div>
								<select class="destination search_input" id="area_to" name="area_to" required="required">
									<?php
									$data = $mysqli->common_select('area');
									if(!$data['error']) {
										foreach($data['data'] as $d) {
									?>
									<option value="<?= $d->id ?>" <?= $_GET['area_to']==$d->id?"selected":"" ?>><?= $d->name ?></option>
									<?php } } ?>
								</select>
							</div>
							<div class="search_item">
								<div>Journey Date</div>
								<input type="date" name="dep_date" class="check_in search_input" value="<?= $_GET['dep_date'] ?>" required="required">
							</div>
							
							<button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

    
    <?php 
      $cols=array(1,2,3,4);
      $depdate=date('Y-m-d',strtotime($_GET['dep_date']));
      $result=$mysqli->common_query("SELECT schedule.*,route.name,vehicle.name as bus,vehicle.registration_no,vehicle.vehicle_type,(select area.name from area where area.id= route.break_area) as breakarea,
                                            (select counter.counter_name from counter WHERE counter.id=schedule.departure_counter) as depcounter,
                                            (select counter.counter_name from counter WHERE counter.id=schedule.arrival_counter) as arrcounter
                                            FROM `schedule`
                                            JOIN vehicle on vehicle.id=schedule.vehicle_id
                                            JOIN route on route.id=schedule.route_id
                                            WHERE route.area_from={$_GET['area_from']} and route.area_to={$_GET['area_to']} and 
                                            date(schedule.departure_time)='{$depdate}'");
      if($result){
        if($result['data']){
            foreach($result['data'] as $data){
              $seat=$rows=array();
              $con['id']=$_GET['id'] ?? 0;
              $result=$mysqli->common_query("SELECT vehicle_seat_type.*,seat.name,seat_type.name as stype FROM `vehicle_seat_type` 
                                            JOIN seat on seat.id=vehicle_seat_type.seat_id
                                            JOIN seat_type on seat_type.id=vehicle_seat_type.seat_type_id
                                            WHERE vehicle_seat_type.vehicle_id={$data->vehicle_id} and vehicle_seat_type.deleted_at is null order by seat.name");
              if($result){
                if($result['data']){
                  foreach($result['data'] as $rs){
                    $rows[substr($rs->name,0,1)]=substr($rs->name,0,1);
                    $seat[$rs->name]=$rs;
                  }


                  $booked_seat=array();
                  $conbook['vehicle_id']=$data->vehicle_id;
                  $conbook['schedule_id']=$data->id;
                  $booked=$mysqli->common_select('seat_book_details','*',$conbook);
                  if($booked){
                      if($booked['data']){
                        foreach($booked['data'] as $bd){
                          $booked_seat[$bd->seat_id]=$bd->seat_id;
                        }
                      }
                  }
                }
              }
              if(count($seat) > 0){
    ?>
    <div class="row row-50 justify-content-md-center align-items-lg-center justify-content-xl-between">
      <div class="col-md-10 col-lg-6">
        <h3>
          <button type="button" onclick="showSeatPlan(<?= $data->id ?>)" class="btn btn-link">
            <?= $data->bus ?> #<?= $data->couch_number ?>
          </button>
          <button type="button" onclick="showSeatPlan(<?= $data->id ?>)" class="btn btn-link btn-warning">View Seat-plan</button>
        </h3>
        <p>
          Bus Type: <?= $data->vehicle_type ?><br>
          Start Counter: <?= $data->depcounter ?><br>
          Break: <?= $data->breakarea ?><br>
          End Counter: <?= $data->arrcounter ?><br>
          Time: <?= date('h:i A',strtotime($data->departure_time)) ?> - <?= date('h:i A',strtotime($data->arrival_time)) ?><br>
        </p>
        <div class="divider divider-decorate"></div>
        <table class="table">
          <tr>
            <th>Seat</th>
            <th>Price</th>
          </tr>
          <tbody class="vehicle<?= $data->id ?>">

          </tbody>
          <tfoot>
            <tr>
              <th class="total_qty<?= $data->id ?>">0</th>
              <th class="total_price<?= $data->id ?>">0.00</th>
            </tr>
            <tr>
              <td colspan="2">
                <a class="button button-sm button-secondary button-nina" href="ticket_details.php" >BUY NOW</a>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
      <div class="col-md-10 col-lg-6">
        <div class="p-3 seat_plan seat_plan<?= $data->id ?>" style="display:none">
          <table style="border:2px solid #ffa900" class="table">
            <tbody>
              <?php 
                if(count($rows)){
                  foreach($rows as $r){
              ?>
                    <tr>
                      <?php
                        if(count($cols)){
                          foreach($cols as $c){
                      ?>
                          <td>
                            <?php if(isset($seat["{$r}{$c}"])){ 
                                  if(isset($booked_seat[$seat["{$r}{$c}"]->seat_id])){ ?>
                                    <button title="<?= $seat["{$r}{$c}"]->name ?? '' ?>" style="cursor: no-drop;" type="button" class="btn btn-link p-0 " value="">
                                      <img width="25px" src="<?= $baseurl ?>assets/images/icon/seat_ash.svg" alt="">
                                    </button>
                            <?php }else{ ?>
                                      <button title="<?= $seat["{$r}{$c}"]->name ?? '' ?>" style="cursor: pointer;" onclick="getSeat(this)" type="button" data-schedule="<?= $data->id ?>" data-seat='<?= json_encode($seat["{$r}{$c}"]) ?>' class="btn btn-link p-0 vseat<?= $data->id ?>" value="">
                                        <img width="25px" src="<?= $baseurl ?>assets/images/icon/seat_green.svg" alt="">
                                      </button>
                            <?php }} ?>
                          </td>
                      <?php } } ?>
                    </tr>
              <?php } } ?>
            </tbody>
            
          </table>
        </div>
      </div>
    </div>
    <?php } } } } ?>
  </div>
</section>
	<!-- Footer -->
<?php include_once('include/footer.php'); ?>

<script>
// Vanilla JavaScript Implementation

// Show seat plan based on schedule
function showSeatPlan(scheduleId) {
  document.querySelectorAll('.seat_plan').forEach(plan => plan.style.display = 'none');
  document.querySelector(`.seat_plan${scheduleId}`).style.display = 'block';
}

// Handle seat selection
function getSeat(e) {
  
  const schedule = e.dataset.schedule;
  const seatData = JSON.parse(e.dataset.seat);
  const seatImage = e.querySelector('img');

  e.classList.toggle('selectedSeat');
  seatImage.src = e.classList.contains('selectedSeat') ? '<?= $baseurl ?>assets/images/icon/seat_yellow.svg' : '<?= $baseurl ?>assets/images/icon/seat_green.svg';

  updateCart(schedule);
  addToCart(seatData, schedule);
}

// Update cart details
function updateCart(schedule) {
  const selectedSeats = document.querySelectorAll(`.vseat${schedule}.selectedSeat`);
  
  let seatData = '';
  let seatQty = 0;
  let seatTotal = 0;

  selectedSeats.forEach(seat => {
    const data = JSON.parse(seat.dataset.seat);
    seatQty++;
    seatTotal += parseFloat(data.price);
    seatData += `<tr><td>${data.name}</td><td>${data.price}</td></tr>`;
  });

  document.querySelector(`.vehicle${schedule}`).innerHTML = seatData;
  document.querySelector(`.total_qty${schedule}`).textContent = seatQty;
  document.querySelector(`.total_price${schedule}`).textContent = seatTotal;
}

// Add seat to cart (simulated)
function addToCart(seatData, schedule) {
  const cartData = {
    seat_id: seatData.id,
    price: seatData.price,
    name: seatData.name,
    schedule: schedule,
    vehicle_id: seatData.vehicle_id
  };

  addToCartAJAX(cartData);
}

// Event listeners for seat selection
document.querySelectorAll('.seat').forEach(seat => {
  seat.addEventListener('click', () => getSeat(seat));
});
</script>

<script>
  function addToCartAJAX(cartData){
    $.get('cart_add.php',
      { seat_id : cartData.seat_id,price:cartData.price,name:cartData.name,schedule:cartData.schedule,vehicle:cartData.vehicle_id},
      function(data){
        if(data){
          console.log(data)
        }
      }
    )
  }
</script>
