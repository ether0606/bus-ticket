<?php include_once('include/header.php'); ?>
<section class="section section-lg bg-default mt-5">
        <div class="container container-bigger mt-5">
          <div class="row">
            <div class="col-12 mt-5">
              <form action="" method="get">
                <div class="d-flex bd-highlight">
                  <div class="p-2 flex-even">
                    <div class="form-wrap form-wrap-inline">
                      <label class="form-label-outside">From</label>
                      <div class="form-wrap form-wrap-inline">
                        <select class="form-input select-filter" required name="from" id="from" data-placeholder="Choose One"  >
                          <option value=""></option>
                            <?php 
                              $result=$mysqli->common_select('area');
                                if($result){
                                  if($result['data']){
                                    foreach($result['data'] as $data){
                            ?>
                                <option value="<?= $data->id ?>" <?= $_GET['from']==$data->id?"selected":"" ?>><?= $data->name ?></option>
                            <?php } } } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="p-2 flex-even">
                    <label class="form-label-outside">To</label>
                    <div class="form-wrap form-wrap-inline">
                      <select class="form-input select-filter" data-placeholder="Choose One" required name="area_to" id="area_to">
                        <option value=""></option>
                          <?php 
                            $result=$mysqli->common_select('area');
                              if($result){
                                if($result['data']){
                                  foreach($result['data'] as $data){
                          ?>
                              <option value="<?= $data->id ?>" <?= $_GET['area_to']==$data->id?"selected":"" ?>><?= $data->name ?></option>
                          <?php } } } ?>
                      </select>
                    </div>
                  </div>
                  <div class="p-2 flex-even">
                    <label class="form-label-outside">Journey Date</label>
                    <div class="form-wrap form-wrap-validation">
                      <input class="form-input" id="dateForm" name="dep_date" type="text" value="<?= $_GET['dep_date'] ?>" data-time-picker="date">
                      <label class="form-label" for="dateForm">Choose the date</label>
                    </div>
                  </div>
                  <div class="p-2 flex-even">
                    <button class="button button-block button-secondary mt-4" type="submit">search</button>
                  </div>
                </div>
              </form>
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

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="assets/#"><img src="assets/images/logo.png" alt="">travelix</a></div>
							</div>
							<p class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="assets/#"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="assets/#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="assets/#"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="assets/#"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="assets/#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">blog posts</div>
						<div class="footer_content footer_blog">
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="assets/images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="assets/blog.html">Travel with us this year</a></div>
									<div class="footer_blog_date">Nov 29, 2017</div>
								</div>
							</div>
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="assets/images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="assets/blog.html">New destinations for you</a></div>
									<div class="footer_blog_date">Nov 29, 2017</div>
								</div>
							</div>

							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="assets/images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="assets/blog.html">Travel with us this year</a></div>
									<div class="footer_blog_date">Nov 29, 2017</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">tags</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">
								<li class="tag_item"><a href="assets/#">design</a></li>
								<li class="tag_item"><a href="assets/#">fashion</a></li>
								<li class="tag_item"><a href="assets/#">music</a></li>
								<li class="tag_item"><a href="assets/#">video</a></li>
								<li class="tag_item"><a href="assets/#">party</a></li>
								<li class="tag_item"><a href="assets/#">photography</a></li>
								<li class="tag_item"><a href="assets/#">adventure</a></li>
								<li class="tag_item"><a href="assets/#">travel</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="assets/images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="assets/images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">2556-808-8613</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="assets/images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="assets/mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="assets/images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="assets/https://colorlib.com">www.colorlib.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="assets/https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="assets/#">home</a></li>
								<li class="footer_nav_item"><a href="assets/about.html">about us</a></li>
								<li class="footer_nav_item"><a href="assets/offers.html">offers</a></li>
								<li class="footer_nav_item"><a href="assets/blog.html">news</a></li>
								<li class="footer_nav_item"><a href="assets/contact.html">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/styles/bootstrap4/popper.js"></script>
<script src="assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="assets/plugins/easing/easing.js"></script>
<script src="assets/js/custom.js"></script>

</body>

</html>

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
  console.log(selectedSeats)
  let seatData = '';
  let seatQty = 0;
  let seatTotal = 0;

  selectedSeats.forEach(seat => {
    const data = JSON.parse(seat.dataset.seat);
    seatQty++;
    seatTotal += parseFloat(data.price);
    seatData += `<tr><td>${data.name}</td><td>${data.price}</td></tr>`;
  });
console.log(seatData);
  document.querySelector(`.vehicle${schedule}`).innerHTML = seatData;
  document.querySelector(`.total_qty${schedule}`).textContent = seatQty;
  document.querySelector(`.total_price${schedule}`).textContent = seatTotal;
}

// Add seat to cart (simulated)
function addToCart(seatData, schedule) {
  const cartData = {
    seat_id: seatData.name,
    price: seatData.price,
    name: seatData.name,
    schedule: schedule,
    vehicle_id: seatData.name // Assuming vehicle_id is the same as seat name for this example
  };

  // Simulate sending data to the server
  console.log('Added to cart:', cartData);
}

// Event listeners for seat selection
document.querySelectorAll('.seat').forEach(seat => {
  seat.addEventListener('click', () => getSeat(seat));
});
</script>
