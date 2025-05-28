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
                  <h4 class="card-title">Add New Bus</h4>
                 
                  <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                      <label for="bus_company_id">Bus Company</label>
                      <select class="form-control" id="bus_company_id" name="bus_company_id">
                        <?php
                          $data=$mysqli->common_select('buscompany');
                          if(!$data['error']){
                            foreach($data['data'] as $d){
                        ?>
                          <option value="<?= $d->id ?>"><?= $d->name ?></option>
                        <?php } } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="registration_no">Registration Number</label>
                      <input type="text" class="form-control" id="registration_no" name="registration_no" placeholder="Registration Number">
                    </div>
                    <div class="form-group">
                      <label for="bus_type">Bus Type</label>
                      <select class="form-control" id="bus_type" name="bus_type">
                        <option value="AC">AC</option>
                        <option value="NON-AC">NON-AC</option>
                        <option value="SLEEPER">SLEEPER</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="note">Note</label>
                      <textarea class="form-control" id="note" name="note" placeholder="note"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>

                  <?php
                  
                      if($_POST){
                        $_POST['created_at']=date('Y-m-d H:i:s');
                        $_POST['created_by']=$_SESSION['user']->id;
                        $_POST['status']=1;
                        $res=$mysqli->common_insert('bus',$_POST);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."admin/bus.php'</script>";
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