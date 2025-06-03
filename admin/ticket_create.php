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
                      <label for="user_id">User Id</label>
                      <input type="text" class="form-control" id="user_id" name="user_id" placeholder="User Id">
                    </div>
                    <div class="form-group">
                      <label for="schedule_id">Schedule Id</label>
                      <input type="text" class="form-control" id="schedule_id" name="schedule_id" placeholder="Schedule Id">
                    </div>
                    <div class="form-group">
                      <label for="ticket_qty">Ticket Qty</label>
                      <input type="text" class="form-control" id="ticket_qty" name="ticket_qty" placeholder="Ticket Qty">
                    </div>
                      <div class="form-group">
                      <label for="total_price">Total Price</label>
                      <input type="text" class="form-control" id="total_price" name="total_price" placeholder="Total Price">
                    </div>
                      <div class="form-group">
                      <label for="discount">Discount</label>
                      <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount">
                    </div>
                      <div class="form-group">
                      <label for="vat">Vat</label>
                      <input type="text" class="form-control" id="vat" name="vat" placeholder="Vat">
                    </div>
                      <div class="form-group">
                      <label for="grand_total">Grand Total</label>
                      <input type="text" class="form-control" id="grand_total" name="grand_total" placeholder="Grand Total">
                    </div>
                      <div class="form-group">
                      <label for="ticket_status">Ticket Status</label>
                      <input type="text" class="form-control" id="ticket_status" name="ticket_status" placeholder="Ticket Status">
                    </div>
                      <div class="form-group">
                      <label for="payment_type">Payment Type</label>
                      <input type="text" class="form-control" id="payment_type" name="payment_type" placeholder="Payment Type">
                    </div>
                      <div class="form-group">
                      <label for="payment_status">Payment Status</label>
                      <input type="text" class="form-control" id="payment_status" name="payment_status" placeholder="Payment Status">
                    </div>
                    
  <?php
                  
                      if($_POST){
                        $_POST['created_at']=date('Y-m-d H:i:s');
                        $_POST['created_by']=$_SESSION['user']->id;
                        $_POST['status']=1;
                        $res=$mysqli->common_insert('ticket',$_POST);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."admin/ticket.php'</script>";
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