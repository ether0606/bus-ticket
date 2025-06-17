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
                  
                  $data=$mysqli->common_select('counter','*',$where);
                  if(!$data['error']){
                    $data=$data['data'][0];
                  }
                ?>
                <!-- content start here -->
                <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Bus Counter</h4>
                
                  <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                      <label for="counter_name">Counter Name</label>
                      <input type="text" class="form-control" id="counter_name" value="<?= $data->counter_name?>" name="counter_name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="contact_no">Contact No</label>
                      <input type="text" class="form-control" id="contact_no" value="<?= $data->contact_no ?>" name="contact_no" placeholder="Contact no">
                    </div>
                    <div class="form-group">
                      <label for="area_id">Area Id</label>
                      <input type="text" class="form-control" id="area_id" value="<?= $data->area_id ?>" name="area_id" placeholder="address">
                    </div>
                    <div class="form-group">
                      <label for="district_id">District Id</label>
                      <input type="text" class="form-control" id="district_id" value="<?= $data->district_id?>" name="district_id" placeholder="District Id">
                    </div>
                    <div class="form-group">
                      <label for="division_id">District Id</label>
                      <input type="text" class="form-control" id="division_id" value="<?= $data->division_id?>" name="division_id" placeholder="Division Id">
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" value="<?= $data->address?>" name="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                      <label for="contact_person">Contact Person</label>
                      <input type="text" class="form-control" id="contact_person" value="<?= $data->contact_person?>" name="contact_person" placeholder="Contact person">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>

                  <?php
                      if($_POST){
                        $_POST['updated_at']=date('Y-m-d H:i:s');
                        $_POST['updated_by']=$_SESSION['user']->id;
                        $res=$mysqli->common_update('counter',$_POST,$where);
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