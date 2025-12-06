<?php
// webhook.php
$config = require 'config.php';
$webhookSecret = $config['webhook_secret']; // set in dashboard

$payload = file_get_contents('php://input');
$headers = getallheaders();
$sig_header = isset($headers['X-Razorpay-Signature']) ? $headers['X-Razorpay-Signature'] : (isset($headers['x-razorpay-signature']) ? $headers['x-razorpay-signature'] : null);

if (!$sig_header) {
    http_response_code(400);
    echo 'Signature header missing';
    exit;
}

$computed = hash_hmac('sha256', $payload, $webhookSecret);
if (hash_equals($computed, $sig_header)) {
    // signature valid - process webhook
    $event = json_decode($payload, true);
    // Example: handle payment.captured
    if (isset($event['event']) && $event['event'] === 'payment.captured') {
        $payment = $event['payload']['payment']['entity'];
        // store payment details, update order status, etc.
    }
    http_response_code(200);
    echo 'OK';
} else {
    http_response_code(400);
    echo 'Invalid signature';
}
