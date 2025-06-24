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
                  <h4 class="card-title">Update seat book details</h4>
                
                  <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                      <label for="vehicle_id">Vehicle Id</label>
                      <input type="text" class="form-control" value="<?= $data->vehicle_id?>" id="vehicle_id" name="vehicle_id" placeholder="vehicle_id">
                    
                    </div>
                    <div class="form-group">
                      <label for="schedule_id">schedule Id</label>
                      <input type="text" class="form-control" value="<?= $data->schedule_id ?>" id="schedule_id" name="schedule_id" placeholder="schedule_id">
                    </div>
                    
                    <div class="form-group">
                      <label for="seat_book_id">Seat Book Id</label>
                      <input type="text" class="form-control" value="<?= $data->seat_book_id ?>" id="seat_book_id" name="seat_book_id" placeholder="seat_book_id">
                    </div>
                    
                    <div class="form-group">
                      <label for="seat_id">Seat Id</label>
                      <input type="text" class="form-control" value="<?= $data->seat_id ?>" id="seat_id" name="seat_id" placeholder="seat_id">
                    </div>

                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" class="form-control" value="<?= $data->price ?>" id="price" name="price" placeholder="price">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>

                  <?php
                      if($_POST){
                        $_POST['updated_at']=date('Y-m-d H:i:s');
                        $_POST['updated_by']=$_SESSION['user']->id;
                        $res=$mysqli->common_update('seat_book_details',$_POST,$where);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."admin/seat_book_details.php'</script>";
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