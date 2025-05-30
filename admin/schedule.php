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
                                        <th>Route Id</th>
                                        <th>Bus Id	</th>
                                        <th>Start Counter Id</th>
                                        <th>End Counter Id</th>
                                        <th>Start Time-Date</th>
                                        <th>Complimantory</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $data=$mysqli->common_query('SELECT *, (SELECT name from area where area.id=route.to_area) as to_area,
(SELECT name from area where area.id=route.from_area) as from_area,
bus.registration_no,
(SELECT counter.name from counter WHERE counter.id=schedule.start_counter_id) as start_counter,
(SELECT counter.name from counter WHERE counter.id=schedule.end_counter_id) as end_counter
FROM `schedule` JOIN route on route.id=schedule.route_id JOIN bus on bus.id=schedule.bus_id where schedule.status=1');
                                        if(!$data['error']){
                                            foreach($data['data'] as $i=>$d){
                                    ?>
                                            <tr>
                                                <td><?= ++$i ?></td>
                                                <td><?= $d->from_area ?> - <?= $d->to_area ?></td>
                                                <td><?= $d->registration_no ?></td>
                                                <td><?= $d->start_counter ?></td>
                                                <td><?= $d->end_counter ?></td>
                                                <td><?= $d->start_time_date	?></td>
                                                <td><?= $d->has_complimantory ? "YES":"NO" ?></td>
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