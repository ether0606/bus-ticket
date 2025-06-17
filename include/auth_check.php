<?php
    if(isset($_SESSION['customer_loggedin']) && $_SESSION['customer_loggedin']){

    }else{
        $actual_link =  urlencode("$_SERVER[REQUEST_URI]");
        echo "<script>window.location='login.php?rurl={$actual_link}'</script>";
        exit;
    }
?>