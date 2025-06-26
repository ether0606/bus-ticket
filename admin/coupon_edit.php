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
                        <?php
                        $where['id'] = $_GET['id'];
                        $data = $mysqli->common_select('coupon', '*', $where);
                        if(!$data['error']){
                            $d = $data['data'][0];
                            $valid_date = date('Y-m-d\TH:i', strtotime($d->validity_date));
                        }
                        ?>
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Coupon</h4>
                                    <form class="forms-sample" method="post" action="">
                                        <div class="form-group">
                                            <label for="name">Coupon Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="<?= $d->name ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="coupon_code">Coupon Code</label>
                                            <input type="text" class="form-control" id="coupon_code" name="coupon_code" value="<?= $d->coupon_code ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="validity_date">Valid Until</label>
                                            <input type="datetime-local" class="form-control" id="validity_date" name="validity_date" value="<?= $valid_date ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="amount_type">Amount Type</label>
                                            <select class="form-control" id="amount_type" name="amount_type" required>
                                                <option value="1" <?= $d->amount_type == 1 ? 'selected' : '' ?>>Percentage</option>
                                                <option value="2" <?= $d->amount_type == 2 ? 'selected' : '' ?>>Fixed Amount</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="amount">Amount/Percentage</label>
                                            <input type="number" step="0.01" class="form-control" id="amount" name="amount" value="<?= $d->amount ?>" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                                    </form>

                                    <?php
                                    if($_POST){
                                        $_POST['updated_at'] = date('Y-m-d H:i:s');
                                        $_POST['updated_by'] = $_SESSION['user']->id;
                                        $res = $mysqli->common_update('coupon', $_POST, $where);
                                        if(!$res['error']){
                                            echo "<script>window.location.href='".$baseurl."admin/coupon.php'</script>";
                                        } else {
                                            echo $res['error_msg'];
                                        }
                                    }
                                    ?>
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