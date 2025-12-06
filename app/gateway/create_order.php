<?php
// create_order.php
require 'vendor/autoload.php';
$config = require 'config.php';

use Razorpay\Api\Api;

header('Content-Type: application/json');

$api = new Api($config['razorpay_key_id'], $config['razorpay_key_secret']);

// Amount should be in paise (e.g., ₹500 = 50000)
$amount_in_paise = 50000; // change dynamically as per cart

$orderData = [
    'receipt'         => 'rcpt_'.time(),
    'amount'          => $amount_in_paise,
    'currency'        => 'INR',
    'payment_capture' => 1 // 1 => automatic capture, 0 => manual capture
];

try {
    $razorpayOrder = $api->order->create($orderData);
    // return order info to client
    echo json_encode([
        'status' => 'success',
        'order' => $razorpayOrder
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ]);
}
