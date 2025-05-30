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
                      <label for="route_id">Route Id</label>
                      <input type="text" class="form-control" id="route_id" name="route_id" placeholder="Route Id">
                    </div>
                    <div class="form-group">
                      <label for="bus_id">Bus Id</label>
                      <input type="text" class="form-control" id="bus_id" name="bus_id" placeholder="Bus Id">
                    </div>
                    <div class="form-group">
                      <label for="start_counter_id">Start Counter Id</label>
                      <input type="text" class="form-control" id="start_counter_id" name="start_counter_id" placeholder="Start Counter Id">
                    </div>
                    <div class="form-group">
                      <label for="end_counter_id">End Counter Id</label>
                      <input type="text" class="form-control" id="end_counter_id" name="end_counter_id" placeholder="End Counter Id">
                    </div>
                    <div class="form-group">
                      <label for="start_time_date">Start Time-Date</label>
                      <input type="text" class="form-control" id="start_time_date" name="start_time_date" placeholder="Start Time Date">
                    </div>
                    <div class="form-group">
                      <label for="has_complimantory	">Complimantory</label>
                      <input type="text" class="form-control" id="has_complimantory" name="has_complimantory" placeholder="Complimantory">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>

                  <?php
                      if($_POST){
                        $_POST['created_at']=date('Y-m-d H:i:s');
                        $_POST['created_by']=$_SESSION['user']->id;
                        $_POST['status']=1;
                        $res=$mysqli->common_insert('buscompany',$_POST);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."admin/bus_company.php'</script>";
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