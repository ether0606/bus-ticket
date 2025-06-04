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
                                    <h4 class="card-title">Seat Book Details</h4>
                                    <a href="<?= $baseurl?>admin/seat_book_details_create.php" class="btn btn-primary float-right">Add New</a>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Vehicle Id</th>
                                                    <th>Schedule Id</th>
                                                    <th>Seat Book Id</th>
                                                    <th>Seat Id</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $data = $mysqli->common_select('seat_book_details');
                                                    if(!$data['error']) {
                                                        foreach($data['data'] as $i => $d) {
                                                ?>
                                                <tr>
                                                    <td><?= ++$i ?></td>
                                                    <td><?= $d->vehicle_id?></td>
                                                    <td><?= $d->schedule_id?></td>
                                                    <td><?= $d->seat_book_id?></td>
                                                    <td><?= $d->seat_id?></td>
                                                    <td><?= $d->price?></td>
                                                 
                                                    <td>
                                                        <a href="<?= $baseurl?>admin/seat_book_details_edit.php?id=<?= $d->id ?>" class="btn btn-info btn-xs" title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?= $baseurl?>admin/seat_book_details_delete.php?id=<?= $d->id ?>" class="btn btn-danger btn-xs" title="Delete">
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
        </div>
    </div>
</div>
<?php include 'include/footer.php';?>