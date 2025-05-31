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
                            $route_data = $mysqli->common_select('route', '*', $where);
                            if(!$route_data['error']) {
                                $route = $route_data['data'][0];
                            }
                        ?>
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Update Route</h4>
                                    <form class="forms-sample" method="post" action="">
                                        <div class="form-group">
                                            <label for="from_area">From Area</label>
                                            <select class="form-control" id="from_area" name="from_area" required>
                                                <option value="">Select Area</option>
                                                <?php
                                                    $areas = $mysqli->common_select('area');
                                                    if(!$areas['error']) {
                                                        foreach($areas['data'] as $a) {
                                                            $selected = $route->from_area == $a->id ? 'selected' : '';
                                                            echo "<option value='{$a->id}' $selected>{$a->name}</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="to_area">To Area</label>
                                            <select class="form-control" id="to_area" name="to_area" required>
                                                <option value="">Select Area</option>
                                                <?php
                                                    if(!$areas['error']) {
                                                        foreach($areas['data'] as $a) {
                                                            $selected = $route->to_area == $a->id ? 'selected' : '';
                                                            echo "<option value='{$a->id}' $selected>{$a->name}</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="break_area">Break Area (Optional)</label>
                                            <select class="form-control" id="break_area" name="break_area">
                                                <option value="">Select Break Area</option>
                                                <?php
                                                    if(!$areas['error']) {
                                                        foreach($areas['data'] as $a) {
                                                            $selected = $route->break_area == $a->id ? 'selected' : '';
                                                            echo "<option value='{$a->id}' $selected>{$a->name}</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                                    </form>

                                    <?php
                                        if($_POST) {
                                            $_POST['updated_at'] = date('Y-m-d H:i:s');
                                            $_POST['updated_by'] = $_SESSION['user']->id;
                                            $res = $mysqli->common_update('route', $_POST, $where);
                                            if(!$res['error']) {
                                                echo "<script>location.href='".$baseurl."admin/route.php'</script>";
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