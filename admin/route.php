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
                                    <h4 class="card-title">Route List</h4>
                                    <a href="<?= $baseurl?>admin/route_create.php" class="btn btn-primary float-right">Add New</a>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Area From</th>
                                                    <th>Break Area</th>
                                                    <th>Area to</th>                                                  
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                        $data = $mysqli->common_query('SELECT route.*, (SELECT name FROM area WHERE area.id=route.area_from) as from_area, (SELECT name FROM area WHERE area.id=route.break_area) as break_area, (SELECT name FROM area WHERE area.id=route.area_to) as to_area FROM `route` WHERE route.deleted_at IS NULL');
                                        if(!$data['error']) {
                                            foreach($data['data'] as $i => $d) {
                                    ?>
                                                <tr>
                                                    <td><?= ++$i ?></td>
                                                    <td><?= $d->name?? '' ?></td>
                                                    <td><?= $d->area_from ?? '' ?></td>
                                                    <td><?= $d->break_area ?? '' ?></td>
                                                    <td><?= $d->area_to?? '' ?></td>
                                                    <td>
                                                        <a href="<?= $baseurl?>admin/route_edit.php?id=<?= $d->id ?>" class="btn btn-info btn-xs" title="Edit">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?= $baseurl?>admin/route_delete.php?id=<?= $d->id ?>" class="btn btn-danger btn-xs" title="Delete">
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