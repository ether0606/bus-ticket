<?php include('include/connection.php') ; ?>
<?php 
    $olddata=array();
    $con['id']=$_GET['id'];
    $data['status']=$_GET['status'];
    $data['updated_by']=1;
    $rs=$mysqli->common_update('seat_book',$data,$con);
    if($rs){
        if($rs['data']){
            echo "<script>window.location='{$baseurl}/admin/seat_book.php'</script>";
        }else{
            echo $rs['error'];
        }
    }
    
?>
     