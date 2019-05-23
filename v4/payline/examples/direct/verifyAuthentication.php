<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<?php
// INITIALIZE
include "../../include.php";
$array = array();
$payline = new paylineSDK();


// AUTHENTICATION
$array['contractNumber'] = $_POST['paymentAmount'];
$array['pares'] = $_POST['paymentCurrency'];
$array['md'] = $_POST['paymentFonction'];

// CARD INFO
$array['card']['number'] = $_POST['cardNumber'];
$array['card']['type'] = $_POST['cardType'];
$array['card']['expirationDate'] = $_POST['cardExpirationDate'];
$array['card']['cvx'] = $_POST['cardCrypto'];
$array['card']['ownerBirthdayDate'] = $_POST['cardOwnerBirthdayDate'];
$array['card']['password'] = $_POST['cardPassword'];

//SWITCHER
$array['Switch']['Forced'] = isset($_POST['switcher']);
$array['Switch']['Choice'] = $_POST['choice']; 

// RESPONSE
$result = $payline->verify_Authentication($array);

// RESPONSE
require('../demos/result/header.html');
echo '<H3>REQUEST</H3>';
print_a($array);
echo '<H3>RESPONSE</H3>';
print_a($result, 0, true);
require('../demos/result/footer.html');
?>

