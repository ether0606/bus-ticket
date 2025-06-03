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
                  
                  $data=$mysqli->common_select('ticket','*',$where);
                  if(!$data['error']){
                    $data=$data['data'][0];
                  }
                ?>
                <!-- content start here -->
                <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Ticket</h4>
                 
                  <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                      <label for="user_id">User</label>
                      <select class="form-control" id="user_id" name="user_id">
                        <?php
                          $users=$mysqli->common_select('user');
                          if(!$users['error']){
                            foreach($users['data'] as $d){
                        ?>
                          <option value="<?= $d->id ?>" <?= $data->user_id==$d->id ? "selected":""?>><?= $d->name ?></option>
                        <?php } } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="schedule_id">Schedule</label>
                      <select class="form-control" id="schedule_id" name="schedule_id">
                        <?php
                          $schedules=$mysqli->common_select('schedule');
                          if(!$schedules['error']){
                            foreach($schedules['data'] as $d){
                        ?>
                          <option value="<?= $d->id ?>" <?= $data->schedule_id==$d->id ? "selected":""?>><?= $d->id ?></option>
                        <?php } } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="ticket_qty">Ticket Quantity</label>
                      <input type="number" class="form-control" value="<?= $data->ticket_qty ?>" id="ticket_qty" name="ticket_qty" placeholder="Ticket Quantity">
                    </div>
                    <div class="form-group">
                      <label for="total_price">Total Price</label>
                      <input type="number" step="0.01" class="form-control" value="<?= $data->total_price ?>" id="total_price" name="total_price" placeholder="Total Price">
                    </div>
                    <div class="form-group">
                      <label for="discount">Discount</label>
                      <input type="number" step="0.01" class="form-control" value="<?= $data->discount ?>" id="discount" name="discount" placeholder="Discount">
                    </div>
                    <div class="form-group">
                      <label for="vat">VAT</label>
                      <input type="number" step="0.01" class="form-control" value="<?= $data->vat ?>" id="vat" name="vat" placeholder="VAT">
                    </div>
                    <div class="form-group">
                      <label for="grand_total">Grand Total</label>
                      <input type="number" step="0.01" class="form-control" value="<?= $data->grand_total ?>" id="grand_total" name="grand_total" placeholder="Grand Total">
                    </div>
                    <div class="form-group">
                      <label for="payment_type">Payment Type</label>
                      <select class="form-control" id="payment_type" name="payment_type">
                        <option value="1" <?= $data->payment_type==1 ? "selected":""?>>Cash</option>
                        <option value="2" <?= $data->payment_type==2 ? "selected":""?>>Card</option>
                        <option value="3" <?= $data->payment_type==3 ? "selected":""?>>Mobile Banking</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="payment_status">Payment Status</label>
                      <select class="form-control" id="payment_status" name="payment_status">
                        <option value="1" <?= $data->payment_status==1 ? "selected":""?>>Paid</option>
                        <option value="0" <?= $data->payment_status==0 ? "selected":""?>>Unpaid</option>
                      </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>

                  <?php
                      if($_POST){
                        $_POST['updated_at']=date('Y-m-d H:i:s');
                        $_POST['updated_by']=$_SESSION['user']->id;
                        $res=$mysqli->common_update('ticket',$_POST,$where);
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