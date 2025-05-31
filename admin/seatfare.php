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
                                    <h4 class="card-title">Seat Fare List</h4>
                                    <a href="<?= $baseurl?>admin/seatfare_create.php" class="btn btn-primary float-right">Add New</a>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Route</th>
                                                    <th>Seat</th>
                                                    <th>Fare</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $data = $mysqli->common_select('seatfare');
                                                    if(!$data['error']) {
                                                        foreach($data['data'] as $i => $d) {
                                                            $route = $mysqli->common_select('route', '*', ['id' => $d->route_id]);
                                                            $seat = $mysqli->common_select('seat', '*', ['id' => $d->seat_id]);
                                                ?>
                                                <tr>
                                                    <td><?= ++$i ?></td>
                                                    <td>
                                                        <?php if(!$route['error']): 
                                                            $from = $mysqli->common_select('area', '*', ['id' => $route['data'][0]->from_area]);
                                                            $to = $mysqli->common_select('area', '*', ['id' => $route['data'][0]->to_area]);
                                                        ?>
                                                            <?= !$from['error'] ? $from['data'][0]->name : 'N/A' ?> to <?= !$to['error'] ? $to['data'][0]->name : 'N/A' ?>
                                                        <?php else: ?>
                                                            N/A
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?= !$seat['error'] ? $seat['data'][0]->seat_number.' ('.$seat['data'][0]->seat_type.')' : 'N/A' ?>
                                                    </td>
                                                    <td><?= $d->fare ?> TK</td>
                                                    <td><?= $d->status ? 'Active' : 'Inactive' ?></td>
                                                    <td>
                                                        <a href="<?= $baseurl?>admin/seatfare_edit.php?id=<?= $d->id ?>" class="btn btn-info btn-xs" title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?= $baseurl?>admin/seatfare_delete.php?id=<?= $d->id ?>" class="btn btn-danger btn-xs" title="Delete">
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