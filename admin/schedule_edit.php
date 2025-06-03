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
                  <h4 class="card-title">Update Schedule</h4>
              
                  <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                    <label for="route_id">Route Id</label>
                    <select class="form-control" id="route_id" name="route_id">
                    <?php
                        $data = $mysqli->common_query('SELECT *, (SELECT name from area WHERE area.id=route.to_area) as to_a,(SELECT name from area WHERE area.id=route.from_area) as from_a, (SELECT name from area WHERE area.id=route.break_area) as break_a FROM `route` where route.status=1');
                        if(!$data['error']) {
                          foreach($data['data'] as $d) {
                      ?>
                      <option value="<?= $d->id ?>"><?= $data->route_id==$d->id ? "selected":""?>><?= $d->route ?></option>
                    <?php } } ?>
                  </select>
                    </div>
                    <div class="form-group">
                    <label for="bus_id">Registration No</label>
                      <select class="form-control" id="bus_id" name="bus_id">
                        <?php
                        $data = $mysqli->common_select('bus');
                        if(!$data['error']) {
                            foreach($data['data'] as $d) {
                        ?>
                        <option value="<?= $d->id ?>"><?= $d->registration_no?></option>
                        <?php } } ?>
                      </select>
                    </div>
                    <div class="form-group">
                    <label for="start_counter_id">Start Counter</label>
                      <select class="form-control" id="start_counter_id" name="start_counter_id">
                        <?php
                          $data = $mysqli->common_select('counter');
                          if(!$data['error']) {
                            foreach($data['data'] as $d) {
                        ?>
                          <option value="<?= $d->id ?>"><?= $d->name ?></option>
                        <?php } } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="end_counter_id">End Counter</label>
                      <select class="form-control" id="end_counter_id" name="end_counter_id">
                        <?php
                          $data = $mysqli->common_select('counter');
                          if(!$data['error']) {
                            foreach($data['data'] as $d) {
                        ?>
                          <option value="<?= $d->id ?>"><?= $d->name ?></option>
                        <?php } } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="start_time_date">Start Time-Date</label>
                      <input type="datetime-local" class="form-control" id="start_time_date" name="start_time_date" placeholder="Start Time Date">
                    </div>
                    <div class="form-group">
                      <label for="has_complimantory	">Complimantory</label>
                      <select class="form-control" id="has_complimantory" name="has_complimantory">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      </select>
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