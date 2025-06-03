<?php
include_once('include/connection.php');

$where['id'] = $_GET['id'];

$data['deleted_at'] = date('Y-m-d H:i:s');
$data['updated_by'] = $_SESSION['auth']->id;
$res = $mysqli->common_update('auth', $data, $where);
if(!$res['error']) {
    echo "<script>location.href='".$baseurl."admin/area.php'</script>";
} else {
    echo $res['error_msg'];
}
?>