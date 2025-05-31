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
                                    <h4 class="card-title">Add New Seat Fare</h4>
                                    <form class="forms-sample" method="post" action="">
                                        <div class="form-group">
                                            <label for="route_id">Route</label>
                                            <select class="form-control" id="route_id" name="route_id" required>
                                                <option value="">Select Route</option>
                                                <?php
                                                    $routes = $mysqli->common_select('route');
                                                    if(!$routes['error']) {
                                                        foreach($routes['data'] as $r) {
                                                            $from = $mysqli->common_select('area', '*', ['id' => $r->from_area]);
                                                            $to = $mysqli->common_select('area', '*', ['id' => $r->to_area]);
                                                            $from_name = !$from['error'] ? $from['data'][0]->name : 'N/A';
                                                            $to_name = !$to['error'] ? $to['data'][0]->name : 'N/A';
                                                            echo "<option value='{$r->id}'>{$from_name} to {$to_name}</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="seat_id">Seat</label>
                                            <select class="form-control" id="seat_id" name="seat_id" required>
                                                <option value="">Select Seat</option>
                                                <?php
                                                    $seats = $mysqli->common_select('seat');
                                                    if(!$seats['error']) {
                                                        foreach($seats['data'] as $s) {
                                                            $bus = $mysqli->common_select('bus', '*', ['id' => $s->bud_id]);
                                                            $bus_no = !$bus['error'] ? $bus['data'][0]->registration_no : 'N/A';
                                                            echo "<option value='{$s->id}'>{$s->seat_number} ({$s->seat_type}) - Bus: {$bus_no}</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="fare">Fare Amount (TK)</label>
                                            <input type="number" class="form-control" id="fare" name="fare" placeholder="Enter fare amount" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    </form>

                                    <?php
                                        if($_POST) {
                                            $_POST['created_at'] = date('Y-m-d H:i:s');
                                            $_POST['created_by'] = $_SESSION['user']->id;
                                            $_POST['status'] = 1;
                                            $res = $mysqli->common_insert('seatfare', $_POST);
                                            if(!$res['error']) {
                                                echo "<script>location.href='".$baseurl."admin/seatfare.php'</script>";
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