<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<?php
// INITIALIZE
include "../../include.php";
$array = array();
$payline = new paylineSDK();

// GET TOKEN
if(isset($_POST['token'])){
    $token = $_POST['token'];
}elseif(isset($_GET['token'])){
    $token = $_GET['token'];
}else{
    echo 'Missing TOKEN';
}

//VERSION
if(isset($_POST['version'])){
	$array['version'] = $_POST['version'];
}else{
    $array['version'] = '';
}

// RESPONSE FORMAT
$response = $payline->get_webPaymentDetails($token,$array);
if(isset($response)){
    require('../demos/result/header.html');
    echo '<H3>RESPONSE</H3>';
    print_a($response, 0, true);
    require('../demos/result/footer.html');
}
?>
