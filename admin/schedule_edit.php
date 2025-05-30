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
                  
                  $data=$mysqli->common_select('schedule','*',$where);
                  if(!$data['error']){
                    $data=$data['data'][0];
                  }
                ?>
                <!-- content start here -->
                <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Bus Schedule</h4>
                 
                  <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                      <label for="route_id">Route Id</label>
                      <select class="form-control" id="route_id" name="route_id">
                        <?php
                          $bus_company=$mysqli->common_select('buscompany');
                          if(!$bus_company['error']){
                            foreach($bus_company['data'] as $d){
                        ?>
                          <option value="<?= $d->id ?>" <?= $data->bus_company_id==$d->id ? "selected":""?>><?= $d->name ?></option>
                        <?php } } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="registration_no">Registration Number</label>
                      <input type="text" class="form-control" value="<?= $data->registration_no ?>" id="registration_no" name="registration_no" placeholder="Registration Number">
                    </div>
                    <div class="form-group">
                      <label for="bus_type">Bus Type</label>
                      <select class="form-control" id="bus_type" name="bus_type">
                        <option value="AC" <?= $data->bus_type=="AC" ? "selected":""?>>AC</option>
                        <option value="NON-AC" <?= $data->bus_type=="NON-AC" ? "selected":""?>>NON-AC</option>
                        <option value="SLEEPER" <?= $data->bus_type=="SLEEPER" ? "selected":""?>>SLEEPER</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="note">Note</label>
                      <textarea class="form-control" id="note" name="note" placeholder="note"><?= $data->note ?></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>

                  <?php
                      if($_POST){
                        $_POST['updated_at']=date('Y-m-d H:i:s');
                        $_POST['updated_by']=$_SESSION['user']->id;
                        $res=$mysqli->common_update('schedule',$_POST,$where);
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