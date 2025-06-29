<?php 
include 'include/connection.php';

$where['status'] = 1;
$where['coupon_code'] = $_GET['code'];
$where['validity_date >'] = date('Y-m-d');

$coupon_data = $mysqli->common_select('coupon','*',$where);

if($coupon_data['error'] || empty($coupon_data['data'])){
    echo json_encode([
        'success' => false,
        'message' => 'Coupon Code Expired or Invalid'
    ]);
}else{
    $coupon = $coupon_data['data'][0];
  
    if($coupon->amount_type == 1){
    $discount_amount = ($_SESSION['cart']['total'] * ($coupon->amount / 100));
    $discount_type = 'Percentage';
}else{ 
    $discount_amount = $coupon->amount;
    $discount_type = 'Fixed';
}

    $_SESSION['cart']['discount'] = $discount_amount;
    $_SESSION['cart']['discount_amount'] = $coupon->amount;
    $_SESSION['cart']['discount_type'] = $discount_type;
    $_SESSION['cart']['coupon_code'] = $coupon->coupon_code;

    echo json_encode([
        'success' => true,
        'discount' => $discount_amount,
        'discount_type' => $discount_type,
        'original_discount_value' => $coupon->amount,
        'grand_total' => ($_SESSION['cart']['total'] + $_SESSION['cart']['other_charge']) - $discount_amount,
        'message' => 'Coupon applied successfully!'
    ]);
}
?>