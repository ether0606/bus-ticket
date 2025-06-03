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
                            <h4 class="card-title">Bus Schedule</h4>
                            <a href="<?= $baseurl?>admin/schedule_create.php" class="btn btn-primary float-right">Add New</a>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Couch Number</th>
                                        <th>Vehicle Id</th>
                                        <th>Route Id</th>
                                        <th>Departure Time</th>
                                        <th>Departure Counter</th>
                                        <th>Arival Time</th>
                                        <th>Arival Counter</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $data=$mysqli->common_query('SELECT *, (SELECT name from area where area.id=route.to_area) as to_area,
(SELECT name from area where area.id=route.from_area) as from_area,
bus.registration_no,
(SELECT counter.name from counter WHERE counter.id=schedule.departure_time) as departure_Time,
(SELECT counter.name from counter WHERE counter.id=schedule.departure_counter) as departure_counter
FROM `schedule` JOIN route on route.id=schedule.route_id JOIN bus on bus.id=schedule.bus_id where schedule.status=1');
                                        if(!$data['error']){
                                            foreach($data['data'] as $i=>$d){
                                    ?>
                                            <tr>
                                                <td><?= ++$i ?></td>
                                                <td><?= $d->from_area ?> - <?= $d->to_area ?></td>
                                                <td><?= $d->couch_number?></td>
                                                <td><?= $d->vehicle_id?></td>
                                                <td><?= $d->route_id ?></td>
                                                <td><?= $d->departure_time	?></td>
                                                <td><?= $d->departure_counter	?></td>
                                                <td><?= $d->arival_time	?></td>
                                                <td><?= $d->arival_counter?></td>

                                                
                                                <td>
                                                    <a href="<?= $baseurl?>admin/schedule_edit.php?id=<?= $d->id ?>" class="btn btn-info btn-xs" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?= $baseurl?>admin/schedule_delete.php?id=<?= $d->id ?>" class="btn btn-danger btn-xs" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                    <?php    }
                                        }
                                    ?>
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