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
                  <h4 class="card-title">Seat Book</h4>
                 
                  <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                      <label for="vehicle_id">Vehicle Id</label>
                      <input type="text" class="form-control" id="vehicle_id" name="vehicle_id" placeholder="vehicle id">
                    </div>

                    <div class="form-group">
                      <label for="schedule_id">Schedule Id</label>
                      <input type="text" class="form-control" id="schedule_id" name="schedule_id" placeholder="schedule id">
                    </div>
                    <div class="form-group">
                      <label for="customer_id">Customer Id</label>
                      <input type="text" class="form-control" id="customer_id" name="customer_id" placeholder="Customer Id">
                    </div>
                    
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                    </div>
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                      <label for="transaction_id">Transaction Id</label>
                      <input type="text" class="form-control" id="transaction_id" name="transaction_id" placeholder="Transaction Id">
                    </div>
                    <div class="form-group">
                      <label for="currency">Currency</label>
                      <input type="text" class="form-control" id="currency" name="currency" placeholder="Currency">
                    </div>
                    <div class="form-group">
                      <label for="total_amount">Total Amount</label>
                      <input type="text" class="form-control" id="total_amount" name="total_amount" placeholder="Total Amount">
                    </div>
                    <div class="form-group">
                      <label for="total_seat">Total Seat</label>
                      <input type="text" class="form-control" id="total_seat" name="total_seat" placeholder="Total Seat">
                    </div>
                    <div class="form-group">
                      <label for="coupon_code">Coupon Code</label>
                      <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Coupon Code">
                    </div>
                    <div class="form-group">
                      <label for="discount">Discount</label>
                      <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount">
                    </div>
                    <div class="form-group">
                      <label for="status">Status</label>
                      <input type="text" class="form-control" id="status" name="status" placeholder="Status">
                    </div>
                    <div class="form-group">
                      <label for="request_cancel">Request Cancel</label>
                      <input type="text" class="form-control" id="request_cancel" name="request_cancel" placeholder="Request Cancel">
                    </div>
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>

                  <?php
                  
                      if($_POST){
                        $_POST['created_at']=date('Y-m-d H:i:s');
                        $_POST['created_by']=$_SESSION['user']->id;
                        $res=$mysqli->common_insert('seat_book',$_POST);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."admin/seat_book.php'</script>";
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