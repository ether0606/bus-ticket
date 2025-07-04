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
                      <h4 class="card-title">Add New Seat Type</h4>
                     
                      <form class="forms-sample" method="post" action="">
                        <div class="form-group">
                          <label for="name">Seat Type Name</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Eg: Business Class" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      </form>

                      <?php
                          if($_POST){
                            $_POST['created_at'] = date('Y-m-d H:i:s');
                            $_POST['created_by'] = $_SESSION['user']->id;
                            $res = $mysqli->common_insert('seat_type', $_POST);
                            if(!$res['error']){
                              echo "<script>window.location.href='".$baseurl."admin/seat_type.php'</script>";
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
<?php include 'include/footer.php';?>