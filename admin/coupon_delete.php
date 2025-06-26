<?php
include_once('include/connection.php');

$where['id'] = $_GET['id'];
$data['deleted_at'] = date('Y-m-d H:i:s');
$data['updated_by'] = $_SESSION['user']->id;
$data['status']=0;
$res = $mysqli->common_update('coupon', $data, $where);
if(!$res['error']){
    header("Location: {$baseurl}admin/coupon.php");
} else {
    echo $res['error_msg'];
}
?>