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
                  <h4 class="card-title">Add Bus Schedule</h4>
                  <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                          <label for="couch_number">Couch Number</label>
                          <input type="text" class="form-control" id="couch_number" name="couch_number" placeholder="Couch Number" required>
                    </div>
                    <div class="form-group">
                          <label for="vehicle_id">Vehicle Id</label>
                          <input type="text" class="form-control" id="vehicle_id" name="vehicle_id" placeholder="Vehicle Id" required>
                    </div>
                    <div class="form-group">
                    <label for="route_id">Route Id</label>
                    <?php
                          $data=$mysqli->common_select('route');
                          if(!$data['error']){
                            foreach($data['data'] as $d){
                        ?>
                          <option value="<?= $d->id ?>"><?= $d->name?></option>
                        <?php } } ?>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>

                  <?php
                      if($_POST){
                        $_POST['created_at']=date('Y-m-d H:i:s');
                        $_POST['created_by']=$_SESSION['user']->id;
                        $_POST['status']=1;
                        $res=$mysqli->common_insert('schedule',$_POST);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."admin/schedule.php'</script>";
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