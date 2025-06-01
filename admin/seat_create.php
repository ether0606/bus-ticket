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
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add New Seat</h4>
                                    <form class="forms-sample" method="post" action="">
                                        <div class="form-group">
                                            <label for="bus_id">Bus</label>
                                            <select class="form-control" id="bus_id" name="bus_id" required>
                                                <option value="">Select Bus</option>
                                                <?php
                                                    $buses = $mysqli->common_select('bus');
                                                    if(!$buses['error']) {
                                                        foreach($buses['data'] as $b) {
                                                            echo "<option value='{$b->id}'>{$b->registration_no} ({$b->bus_type})</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="seat_number">Seat Number</label>
                                            <input type="text" class="form-control" id="seat_number" name="seat_number" placeholder="e.g. A1, B2" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="seat_type">Seat Type</label>
                                            <select class="form-control" id="seat_type" name="seat_type" required>
                                                <option value="Standard">Non-AC</option>
                                                <option value="Premium">AC</option>
                                                <option value="VIP">Sleeper</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="seat_row">Row Number</label>
                                            <input type="number" class="form-control" id="seat_row" name="seat_row" placeholder="e.g. 1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="seat_column">Column Number</label>
                                            <input type="number" class="form-control" id="seat_column" name="seat_column" placeholder="e.g. 1" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    </form>

                                    <?php
                                        if($_POST) {
                                            $_POST['created_at'] = date('Y-m-d H:i:s');
                                            $_POST['created_by'] = $_SESSION['user']->id;
                                            $_POST['status'] = 1;
                                            $res = $mysqli->common_insert('seat', $_POST);
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