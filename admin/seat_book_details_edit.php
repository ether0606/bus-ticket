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
                            $area_data = $mysqli->common_select('seat_book_details', '*', $where);
                            if(!$area_data['error']) {
                                $area = $area_data['data'][0];
                            }
                        ?>
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Update Seat Book Details</h4>
                                    <form class="forms-sample" method="post" action="">
                                        <div class="form-group">
                                            <label for="vehicle_id">Vehicle Id</label>
                                            <input type="text" class="form-control" id="vehicle_id" name="vehicle_id" value="<?= $area->vehicle_id ?>" placeholder="Vehicle Id" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="schedule_id">Schedule Id</label>
                                            <input type="text" class="form-control" id="schedule_id" name="schedule_id" value="<?= $area->schedule_id ?>" placeholder="schedule Id" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="seat_book_id">Seat Book Id</label>
                                            <input type="text" class="form-control" id="seat_book_id" name="seat_book_id" value="<?= $area->seat_book_id ?>" placeholder="Seat Book Id" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="seat_id">Seat Id</label>
                                            <input type="text" class="form-control" id="seat_id" name="seat_id" value="<?= $area->seat_id ?>" placeholder="Seat Id" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="text" class="form-control" id="price" name="price" value="<?= $area->price?>" placeholder="Price" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                                    </form>

                                    <?php
                                        if($_POST) {
                                            $_POST['updated_at'] = date('Y-m-d H:i:s');
                                            $_POST['updated_by'] = $_SESSION['user']->id;
                                            $res = $mysqli->common_update('seat_book_details', $_POST, $where);
                                            if(!$res['error']) {
                                                echo "<script>location.href='".$baseurl."admin/seat_book_details.php'</script>";
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