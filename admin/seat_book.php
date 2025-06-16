<?php include 'include/header.php';?>
    <!-- partial:partials/_navbar.html -->
<?php include 'include/topbar.php';?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include 'include/sidebar.php';?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Seat Book</h4>
                            <a href="<?= $baseurl?>admin/seat_book_create.php" class="btn btn-primary float-right">Add New</a>
                            <div class="table-responsive pt-3">
                                <table class="table table-striped projects">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Route</th>
                                        <th scope="col">Order Date </th>
                                        <th scope="col">Journey Date </th>
                                        <th scope="col">Total Seat</th>
                                        <th scope="col">Total Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Refund</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $result=$mysqli->common_query("SELECT seat_book.*, schedule.couch_number,schedule.departure_time,
                                                                                schedule.arrival_time,
                                                                                (select route.name from route WHERE route.id=schedule.route_id) as route,
                                                                                (select counter.counter_name from counter WHERE counter.id=schedule.departure_counter) as departure_counter,
                                                                                (select counter.counter_name from counter WHERE counter.id=schedule.arrival_counter) as arrival_counter,
                                                                                vehicle.name as vehicle_name, vehicle.registration_no FROM `seat_book`
                                                                                JOIN schedule on schedule.id=seat_book.schedule_id
                                                                                JOIN vehicle on vehicle.id=seat_book.vehicle_id order by seat_book.id DESC"); 
                                            if($result){
                                            if($result['data']){
                                                foreach($result['data'] as $i=>$data){
                                        ?>
                                        <tr>
                                        <td><?= ++$i ?></td>
                                        <td><?= $data->name ?></td>
                                        <td><?= $data->route ?></td>
                                        <td><?= date('d-m-Y h:iA',strtotime( $data->created_at)) ?></td>
                                        <td><?= date('d-m-Y h:iA',strtotime( $data->departure_time)) ?></td>
                                        <td><?= $data->total_seat?></td>
                                        <td><?= $data->total_amount?></td>
                                        <td><?= $data->status==1 ? "canceled and refunded" : "Paid" ?></td>
                                        <td><?= $data->request_cancel==1 ? "Refund request sent" : "" ?></td>
                                        <td>
                                            <a href="<?= $baseurl ?>invoice.php?txnid=<?= $data->transaction_id ?? "" ?>" class="btn btn-success">Invoice</a>
                                            <?php if($data->status==1){ ?>
                                                <a onclick="return confirm('Are you sure?')" href="<?= $baseurl ?>admin/cencel_request.php?id=<?= $data ->id ?>&status=0" class="btn btn-danger btn-xs"> Cancel refund </a>
                                            <?php } else { ?>
                                                <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="<?= $baseurl ?>admin/cencel_request.php?id=<?= $data ->id ?>&status=1"> Refund </a>
                                            <?php } ?>
                                        </td>
                                        </tr>
                                        <?php }}} ?>
                                    </tbody>
                                    </table>
                            </div>
                            </div>
                        </div>
                    </div>

              </div>
            </div>
          </div>
          
          
          

<?php include 'include/footer.php';?>