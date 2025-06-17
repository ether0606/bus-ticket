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
                  $data=$mysqli->common_select('customer','*',$where);
                  if(!$data['error']){
                    $data=$data['data'][0];
                  }
                ?>
                <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Update Author</h4>

                      <form class="forms-sample" method="post" action="">
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" id="name" value="<?= $data->name ?>" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                          <label for="contact_no">Contact No</label>
                          <input type="text" class="form-control" id="contact_no" value="<?= $data->contact_no?>" name="contact_no" placeholder="Contact No">
                        </div>
                        <div class="form-group">
                          <label for="address">Address</label>
                          <input type="text" class="form-control" id="address" value="<?= $data->address?>" name="address" placeholder="Adress">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $data->email?>">
                        </div> 
                        
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      </form>

                      <?php
                          if($_POST){
                            $_POST['updated_at']=date('Y-m-d H:i:s');
                            $_POST['updated_by']=$_SESSION['auth']->id;
                            if(!empty($_POST['password'])){
                              $_POST['password']=($_POST['password']);
                            }else{
                              unset($_POST['password']);
                            }
                            $res=$mysqli->common_update('auth',$_POST,$where);
                            if(!$res['error']){
                              echo "<script>location.href='".$baseurl."admin/auth.php'</script>";
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