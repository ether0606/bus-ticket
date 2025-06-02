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
                      <label for="user_id">User</label>
                      <select class="form-control" id="user_id" name="user_id">
                        <?php
                          $data=$mysqli->common_select('user');
                          if(!$data['error']){
                            foreach($data['data'] as $d){
                        ?>
                          <option value="<?= $d->id ?>"><?= $d->name ?></option>
                        <?php } } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="schedule_id">Schedule</label>
                      <select class="form-control" id="schedule_id" name="schedule_id">
                        <?php
                          $data=$mysqli->common_select('schedule');
                          if(!$data['error']){
                            foreach($data['data'] as $d){
                        ?>
                          <option value="<?= $d->id ?>"><?= $d->id ?></option>
                        <?php } } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="ticket_qty">Ticket Quantity</label>
                      <input type="number" class="form-control" id="ticket_qty" name="ticket_qty" placeholder="Ticket Quantity">
                    </div>
                    <div class="form-group">
                      <label for="total_price">Total Price</label>
                      <input type="number" step="0.01" class="form-control" id="total_price" name="total_price" placeholder="Total Price">
                    </div>
                    <div class="form-group">
                      <label for="discount">Discount</label>
                      <input type="number" step="0.01" class="form-control" id="discount" name="discount" placeholder="Discount">
                    </div>
                    <div class="form-group">
                      <label for="vat">VAT</label>
                      <input type="number" step="0.01" class="form-control" id="vat" name="vat" placeholder="VAT">
                    </div>
                    <div class="form-group">
                      <label for="grand_total">Grand Total</label>
                      <input type="number" step="0.01" class="form-control" id="grand_total" name="grand_total" placeholder="Grand Total">
                    </div>
                    <div class="form-group">
                      <label for="ticket_status">Ticket Status</label>
                      <select class="form-control" id="ticket_status" name="ticket_status">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="payment_type">Payment Type</label>
                      <select class="form-control" id="payment_type" name="payment_type">
                        <option value="1">Cash</option>
                        <option value="2">Card</option>
                        <option value="3">Mobile Banking</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="payment_status">Payment Status</label>
                      <select class="form-control" id="payment_status" name="payment_status">
                        <option value="1">Paid</option>
                        <option value="0">Unpaid</option>
                      </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>

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

                </div>
              </div>
            </div>
            
              </div>
            </div>
          </div>
          
          
          
<?php include 'include/footer.php';?>