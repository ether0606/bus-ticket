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
                                    <h4 class="card-title">Add New Route</h4>
                                    <form class="forms-sample" method="post" action="">
                                    <div class="form-group">
                                        <label for="name">Route Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Route Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="area_from">Area From</label>
                                            <select class="form-control" id="area_from" name="area_from" required>
                                                <option value="">Select Area</option>
                                                <?php
                                                    $areas = $mysqli->common_select('area');
                                                    if(!$areas['error']) {
                                                        foreach($areas['data'] as $a) {
                                                            echo "<option value='{$a->id}'>{$a->name}</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="area_to">Area To</label>
                                            <select class="form-control" id="area_to" name="area_to" required>
                                                <option value="">Select Area</option>
                                                <?php
                                                    if(!$areas['error']) {
                                                        foreach($areas['data'] as $a) {
                                                            echo "<option value='{$a->id}'>{$a->name}</option>";
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
                                                            echo "<option value='{$a->id}'>{$a->name}</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    </form>

                                    <?php
                                        if($_POST) {
                                            $_POST['created_at'] = date('Y-m-d H:i:s');
                                            $_POST['created_by'] = $_SESSION['user']->id;
                                            $_POST['status'] = 1;
                                            $res = $mysqli->common_insert('route', $_POST);
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