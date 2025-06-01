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
                                                    <th>From Area</th>
                                                    <th>To Area</th>
                                                    <th>Break Area</th>                                                  
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $data = $mysqli->common_query('SELECT *, (SELECT name from area WHERE area.id=route.to_area) as to_a,(SELECT name from area WHERE area.id=route.from_area) as from_a, (SELECT name from area WHERE area.id=route.break_area) as break_a FROM `route` where route.status=1');
                                                    if(!$data['error']) {
                                                        foreach($data['data'] as $i => $d) {
                                                ?>
                                                <tr>
                                                    <td><?= ++$i ?></td>
                                                    <td><?= !$from_area['error'] ? $from_area['data'][0]->name : '' ?></td>
                                                    <td><?= !$to_area['error'] ? $to_area['data'][0]->name : '' ?></td>
                                                    <td><?= ($break_area && !$break_area['error']) ? $break_area['data'][0]->name : 'N/A' ?></td>
                                                
                                                    <td><?= $d->from_a ?? '' ?></td>
                                                    <td><?= $d->to_a ?? '' ?></td>
                                                    <td><?= $d->break_a ?? 'N/A' ?></td>
                                                    <td><?= $d->status ? 'Active' : 'Inactive' ?></td>
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