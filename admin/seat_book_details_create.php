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

                  <h4 class="card-title">Add New Seat Book Details</h4>
                 
                  <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                      <label for="name">Vehicle Id </label>
                      <input type="text" class="form-control" id="vehicle_id" name="vehicle_id" placeholder="Vehicle Id">
                    </div>
                 
                  <form class="forms-sample" method="post" action="">
                    
                    <div class="form-group">
                      <label for="schedule_id">Schedule Id</label>
                      <input type="text" class="form-control" id="schedule_id" name="schedule_id" placeholder="Schedule Id">
                    </div>
                    
                    <div class="form-group">
                      <label for="seat_book_id">Seat Book Id</label>
                      <input type="text" class="form-control" id="seat_book_id" name="seat_book_id" placeholder="Seat Book Id">
                    </div>
                    
                    <div class="form-group">
                      <label for="seat_id">Seat Id</label>
                      <input type="seat_id" class="form-control" id="seat_id" name="seat_id" placeholder="Seat Id"></input>
                    </div>

                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="price" class="form-control" id="price" name="price" placeholder="Price"></input>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>

                  <?php
                  
                      if($_POST){
                        $_POST['created_at']=date('Y-m-d H:i:s');
                        $_POST['created_by']=$_SESSION['user']->id;

                        $res=$mysqli->common_insert('seat_book_details',$_POST);
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