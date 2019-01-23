<?php
// INITIALIZE
include "../../include.php";
$array = array();
$payline = new paylineSDK();


// CONTRACT NUMBER
$array['contractNumber'] = $_POST['contractNumber'];
$array['paymentRecordId'] = $_POST['paymentRecordId'];	

//SWITCHER
$array['Switch']['Forced'] = isset($_POST['switcher']);
$array['Switch']['Choice'] = $_POST['choice']; 
// EXECUTE
$response = $payline->get_payment_record($array);
require('../demos/result/header.html');
echo '<H3>REQUEST</H3>';
print_a($array);
echo '<H3>RESPONSE</H3>';
print_a($response, 0, true);
require('../demos/result/footer.html');

?>