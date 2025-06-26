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
                                    <h4 class="card-title">Coupons</h4>
                                    <a href="<?= $baseurl?>admin/coupon_create.php" class="btn btn-primary float-right">Add New</a>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Coupon Code</th>
                                                    <th>Valid Until</th>
                                                    <th>Type</th>
                                                    <th>Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $data = $mysqli->common_select('coupon');
                                                    if(!$data['error']){
                                                        foreach($data['data'] as $i=>$d){
                                                            $amount_type = $d->amount_type == 1 ? 'Percentage' : 'Fixed';
                                                ?>
                                                <tr>
                                                    <td><?= ++$i ?></td>
                                                    <td><?= $d->name ?></td>
                                                    <td><?= $d->coupon_code ?></td>
                                                    <td><?= date('Y-m-d H:i:s', strtotime($d->validity_date)) ?></td>
                                                    <td><?= $amount_type ?></td>
                                                    <td><?= number_format($d->amount, 2)?></td>
                                                    <td>
                                                        <a href="<?= $baseurl?>admin/coupon_edit.php?id=<?= $d->id ?>" class="btn btn-info btn-xs">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?= $baseurl?>admin/coupon_delete.php?id=<?= $d->id ?>" class="btn btn-danger btn-xs">
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