<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<?php
// INITIALIZE
include "../../include.php";
$array = array();
$payline = new paylineSDK();


// CONTRACT NUMBER
$array['contractNumber'] = $_POST['contractNumber'];
$payline->setWalletIdList($_POST['walletIdList']);

// CARDIND
$array['cardInd'] =  $_POST['CardIndex'];

//SWITCHER
$array['Switch']['Forced'] = isset($_POST['switcher']);
$array['Switch']['Choice'] = $_POST['choice']; 
// EXECUTE
$response = $payline->disable_Wallet($array);

require('../demos/result/header.html');
echo '<H3>REQUEST</H3>';
print_a($array);
print_a($payline->walletIdList);
if (!empty($payline->walletIdList))
print_a($payline->walletIdList);
echo '<H3>RESPONSE</H3>';
print_a($response, 0, true);
require('../demos/result/footer.html');

?>
