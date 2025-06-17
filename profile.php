
<?php include('include/header.php') ?>
<?php include_once('include/auth_check.php') ?>
<?php 
    $olddata=array();
    $con['id']=$_SESSION['customer_id'];
    $result=$mysqli->common_select('customer','*',$con);
    if($result){
        if($result['data']){
            $olddata=$result['data'][0];
        }
    }
?>
<section class="section" style="margin-top: 143px;">
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <form class="" action="" method="post" novalidate>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" class='optional' name="name" value="<?= $olddata->name ?>" type="text" /></div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Contact No<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" value="<?= $olddata->contact_no ?>" name="contact_no" required="required" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" value="<?= $olddata->email ?>" name="email" disabled />
                                    </div>
                                </div>
                                
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <button type='submit' class="btn btn-primary">Submit</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php 
                                if($_POST){
                                    $_POST['updated_at']=date('Y-m-d H:i:s');
                                    $_POST['updated_by']=1;
                                    $rs=$mysqli->common_update('customer',$_POST,$con);
                                    if($rs){
                                        if($rs['data']){
                                            echo "<script>window.location='{$baseurl}profile.php'</script>";
                                        }else{
                                            echo $rs['error'];
                                        }
                                    }
                                }
                            ?>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
</section>
 <?php include('include/footer.php') ?>