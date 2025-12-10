<?php
require('vendor/autoload.php');
hole($_GET);
use Razorpay\Api\Api;

$keyId = "rzp_test_RnzQv4040zjql5";
$keySecret = "9RGLldTAdbILjIjdRGnQ33NA";

$api = new Api($keyId, $keySecret);
// pay_Rpl4eGPs1Y2oPJ
try {

    $attributes = [
        'razorpay_order_id'   => $_GET['order_id'],
        'razorpay_payment_id' => $_GET['payment_id'],
        'razorpay_signature'  => $_GET['signature']
    ];

    $api->utility->verifyPaymentSignature($attributes);

    // Signature Verified → SUCCESS
    location("/checkout/success?payment_id=" . $_GET['payment_id']);
    exit;

} catch (Exception $e) {
    // Fail
    location('/failed');
    exit;
}
