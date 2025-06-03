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
                                    <h4 class="card-title">Ticket Details</h4>
                                    <a href="<?= $baseurl?>admin/ticket_details_create.php" class="btn btn-primary float-right">Add New</a>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Ticket Id</th>
                                                    <th>Seat Id</th>
                                                    <th>Price</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include_once('include/connection.php');
                                                $where['ticket_id'] = $_GET['id'];
                                                $res = $mysqli->common_select('ticket_details', '*', $where);
                                                if (!$res['error']) {
                                                    foreach ($res['data'] as $key => $value) {
                                                        echo "<tr>
                                                                <td>" . ($key + 1) . "</td>
                                                                <td>" . $value->ticket_id . "</td>
                                                                <td>" . $value->seat_id . "</td>
                                                                <td>" . $value->price . "</td>
                                                              </tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='4'>No data found</td></tr>";
                                                }
                                                ?>
                                               
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
