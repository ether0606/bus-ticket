<?php include 'include/header.php';?>
    <!-- partial:partials/_navbar.html -->
<?php include 'include/topbar.php';?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include 'include/sidebar.php';?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <?php
                  $where['id']=$_GET['id'];
                  
                  $data=$mysqli->common_select('seat_book_details','*',$where);
                  if(!$data['error']){
                    $data=$data['data'][0];
                  }
                ?>
                <!-- content start here -->
                <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Seat Book Details</h4>
                  <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                      <label for="vehicle_id">Vehicle Id</label>
                      <input type="text" class="form-control" value="<?= $data->vehicle_id?>" id="vehicle_id" name="vehicle_id" placeholder="vehicle_id">
                    </div>
                    <div class="form-group">
                      <label for="registration_no">Registration Number</label>
                      <input type="text" class="form-control" value="<?= $data->registration_no ?>" id="registration_no" name="registration_no" placeholder="Registration Number">
                    </div>
                    <div class="form-group">
                      <label for="vehicle_type">Bus Type</label>
                      <select class="form-control" id="vehicle_type" name="vehicle_type">
                        <option value="AC" <?= $data->vehicle_type=="AC" ? "selected":""?>>AC</option>
                        <option value="NON-AC" <?= $data->vehicle_type=="NON-AC" ? "selected":""?>>NON-AC</option>
                        <option value="SLEEPER" <?= $data->vehicle_type=="SLEEPER" ? "selected":""?>>SLEEPER</option>
                      </select>
                    </div>
                  
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>

                  <?php
                      if($_POST){
                        $_POST['updated_at']=date('Y-m-d H:i:s');
                        $_POST['updated_by']=$_SESSION['auth']->id;
                        $_POST['status'] = 1;
                        $res=$mysqli->common_update('vehicle',$_POST,$where);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."admin/vehicle.php'</script>";
                        }else{
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