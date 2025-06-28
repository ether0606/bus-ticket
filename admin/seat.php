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
                            <h4 class="card-title">Seat</h4>
                            <a href="<?= $baseurl?>admin/seat_create.php" class="btn btn-primary float-right">Add New</a>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Seat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                                    $data = $mysqli->common_select('seat');
                                                    if(!$data['error']) {
                                                        foreach($data['data'] as $i => $d) {
                                                ?>
                                                <tr>
                                                    <td><?= ++$i ?></td>
                                                    <td><?= $d->name ?></td>
                                                    <td>
                                                        <a href="<?= $baseurl?>admin/seat_edit.php?id=<?= $d->id ?>" class="btn btn-info btn-xs" title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?= $baseurl?>admin/seat_delete.php?id=<?= $d->id ?>" class="btn btn-danger btn-xs" title="Delete">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php }
                                                    } ?>
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