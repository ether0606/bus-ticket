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

                <!-- content start here -->
                <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add New Counter</h4>
                 
                  <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                      <label for="counter_name">Counter Name</label>
                      <input type="text" class="form-control" id="counter_name" name="counter_name" placeholder="Counter Name">
                    </div>
                    <div class="form-group">
                      <label for="contact_no">Contact Number</label>
                      <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="contact no">
                    </div>
                    <div class="form-group">
                      <label for="contact_no">Area Id</label>
                      <input type="text" class="form-control" id="area_id" name="area_id" placeholder="Area Id">
                    </div>
                    <div class="form-group">
                      <label for="district_id">District Id</label>
                      <input type="text" class="form-control" id="district_id" name="district_id" placeholder="District Id">
                    </div>
                    <div class="form-group">
                      <label for="division_id">Division Id</label>
                      <input type="text" class="form-control" id="division_id" name="division_id" placeholder="division_id">
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                      <label for="contact_person">Contact Person</label>
                      <input type="text" class="form-control" id="contact_person" name="contact_person" placeholder="Contact Person">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>

                  <?php
                      if($_POST){
                        $_POST['created_at']=date('Y-m-d H:i:s');
                        $_POST['created_by']=$_SESSION['user']->id;
                        $_POST['status']=1;
                        $res=$mysqli->common_insert('counter',$_POST);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."admin/counter.php'</script>";
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