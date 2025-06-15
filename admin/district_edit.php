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
                $data=$mysqli->common_select('district','*',$where);
                if(!$data['error']){
                    $data=$data['data'][0];
                }
                ?>
                <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Update district</h4>

                    <form class="forms-sample" method="post" action="">
                        <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" value="<?= $data->district_name ?>" name="district_name" placeholder="Name">
                        </div>
                        
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>

                    <?php
                        if($_POST){
                            $_POST['updated_at']=date('Y-m-d H:i:s');
                            $_POST['updated_by']=$_SESSION['user']->id;
                            if(!empty($_POST['password'])){
                            $_POST['password']=($_POST['password']);
                            }else{
                            unset($_POST['password']);
                            }
                            $res=$mysqli->common_update('district',$_POST,$where);
                            if(!$res['error']){
                            echo "<script>location.href='".$baseurl."admin/district.php'</script>";
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