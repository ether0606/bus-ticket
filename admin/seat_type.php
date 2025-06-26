<?php include 'include/header.php';?>
    <!-- partial:partials/_navbar.html -->
<?php include 'include/topbar.php';?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
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
                            <h4 class="card-title">Seat Types</h4>
                            <a href="<?= $baseurl?>admin/seat_type_create.php" class="btn btn-primary float-right">Add New</a>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $data = $mysqli->common_select('seat_type');
                                        if(!$data['error'] && count($data['data']) > 0){
                                            foreach($data['data'] as $i=>$d){
                                            ?>
                                            <tr>
                                                <td><?= $i+1 ?></td>
                                                <td><?= $d->name ?></td>
                                                <td>
                                                    <a href="<?= $baseurl?>admin/seat_type_edit.php?id=<?= $d->id ?>" class="btn btn-info btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?= $baseurl?>admin/seat_type_delete.php?id=<?= $d->id ?>" class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                    <?php 
                                            }
                                        } else {
                                    ?>
                                            <tr>
                                                <td colspan="5" class="text-center">No seat types found</td>
                                            </tr>
                                    <?php } ?>
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