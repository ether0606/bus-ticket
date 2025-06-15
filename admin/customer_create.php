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
                  <h4 class="card-title">Add New Customer</h4>
                
                  <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name">

                    </div>
                    <div class="form-group">
                      <label for="contact_no">Contact Number</label>
                      <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Contact Number">
                    </div>
                    
                    <div class="form-group">
                      <label for="address">Address</label>
                      <textarea class="form-control" id="address" name="address" placeholder="Address"></textarea>
                    </div>
                    
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="email"></input>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>

                  <?php
                  
                      if($_POST){
                        $_POST['created_at']=date('Y-m-d H:i:s');
                        $_POST['created_by']=$_SESSION['auth']->id;
                        $_POST['status']=1;
                        $res=$mysqli->common_insert('customer',$_POST);
                        if(!$res['error']){
                          echo "<script>location.href='".$baseurl."admin/customer.php'</script>";
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