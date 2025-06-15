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
                    <input type="text" class="form-control" id="route_id" name="route_id" placeholder="Route Id" required>
                    </div>
                    <div class="form-group">
                    <label for="departure_time">Departure Time</label>
                    <input type="datetime-local" class="form-control" id="departure_time" name="departure_time" placeholder="Departure Time" required>
                    </div>
                    <div class="form-group">
                    <label for="departure_counter">Departure Counter</label>
                    <input type="text" class="form-control" id="departure_counter" name="departure_counter" placeholder="Departure Counter" required>
                    </div>
                    <div class="form-group">
                    <label for="arrival_time">Arival Time</label>
                    <input type="datetime-local" class="form-control" id="arrival_time" name="arrival_time" placeholder="Arival Time" required>
                    </div>
                    <div class="form-group">
                    <label for="arrival_counter">Arival Counter</label>
                    <input type="text" class="form-control" id="arrival_counter" name="arrival_counter" placeholder="Arival Counter" required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>

                  <?php
                      if($_POST){
                        $_POST['created_at']=date('Y-m-d H:i:s');
                        $_POST['created_by']=$_SESSION['user']->id;
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