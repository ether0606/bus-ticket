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
                  <h4 class="card-title">Add New Ticket</h4>
                 
                  <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                      <label for="ticket_id">Ticket Id</label>
                      <input type="text" class="form-control" id="ticket_id" name="ticket_id" placeholder="Ticket Id">
                    </div>
                    <div class="form-group">
                      <label for="seat_id">Seat Id</label>
                      <input type="text" class="form-control" id="seat_id" name="seat_id" placeholder="Seat Id">
                    </div>
                     <div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                    </div>
                 
                 
                    
  <?php
                  
                      if($_POST){
                        $_POST['created_at']=date('Y-m-d H:i:s');
                        $_POST['created_by']=$_SESSION['user']->id;
                        $_POST['status']=1;
                        $res=$mysqli->common_insert('ticket_details',$_POST);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."admin/ticket_details.php'</script>";
                        }else{
                          echo $res['error_msg'];
                        }
                      }
                  ?>


                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>

                 

                </div>
              </div>
            </div>
            
              </div>
            </div>
          </div>
          
          
          

<?php include 'include/footer.php';?>