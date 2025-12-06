<?php
// verify.php
require 'vendor/autoload.php';
$config = require 'config.php';
use Razorpay\Api\Api;

$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    http_response_code(400);
    echo json_encode(['verified' => false, 'message' => 'Invalid payload']);
    exit;
}

$api = new Api($config['razorpay_key_id'], $config['razorpay_key_secret']);

// manual verification using generated signature
$attributes = [
    'razorpay_order_id' => $input['razorpay_order_id'] ?? '',
    'razorpay_payment_id' => $input['razorpay_payment_id'] ?? '',
    'razorpay_signature' => $input['razorpay_signature'] ?? ''
];

try {
    $api->utility->verifyPaymentSignature($attributes);
    // Signature verified — mark payment success in DB, update order status etc.
    echo json_encode(['verified' => true]);
} catch (\Razorpay\Api\Errors\SignatureVerificationError $e) {
    http_response_code(400);
    echo json_encode(['verified' => false, 'message' => $e->getMessage()]);
}
