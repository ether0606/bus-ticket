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
                            $seat_data = $mysqli->common_select('seat', '*', $where);
                            if(!$seat_data['error']) {
                                $seat = $seat_data['data'][0];
                            }
                        ?>
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Update Seat</h4>
                                    <form class="forms-sample" method="post" action="">
                                        <div class="form-group">
                                            <label for="bud_id">Bus</label>
                                            <select class="form-control" id="bud_id" name="bud_id" required>
                                                <option value="">Select Bus</option>
                                                <?php
                                                    $buses = $mysqli->common_select('bus');
                                                    if(!$buses['error']) {
                                                        foreach($buses['data'] as $b) {
                                                            $selected = $seat->bud_id == $b->id ? 'selected' : '';
                                                            echo "<option value='{$b->id}' $selected>{$b->registration_no} ({$b->bus_type})</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="seat_number">Seat Number</label>
                                            <input type="text" class="form-control" id="seat_number" name="seat_number" value="<?= $seat->seat_number ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="seat_type">Seat Type</label>
                                            <select class="form-control" id="seat_type" name="seat_type" required>
                                                <option value="Standard" <?= $seat->seat_type == 'Standard' ? 'selected' : '' ?>>Standard</option>
                                                <option value="Premium" <?= $seat->seat_type == 'Premium' ? 'selected' : '' ?>>Premium</option>
                                                <option value="VIP" <?= $seat->seat_type == 'VIP' ? 'selected' : '' ?>>VIP</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="seat_row">Row Number</label>
                                            <input type="number" class="form-control" id="seat_row" name="seat_row" value="<?= $seat->seat_row ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="seat_column">Column Number</label>
                                            <input type="number" class="form-control" id="seat_column" name="seat_column" value="<?= $seat->seat_column ?>" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                                    </form>

                                    <?php
                                        if($_POST) {
                                            $_POST['updated_at'] = date('Y-m-d H:i:s');
                                            $_POST['updated_by'] = $_SESSION['user']->id;
                                            $res = $mysqli->common_update('seat', $_POST, $where);
                                            if(!$res['error']) {
                                                echo "<script>location.href='".$baseurl."admin/seat.php'</script>";
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