<?php
// config.php
return [
    'razorpay_key_id' => 'rzp_test_XXXXXXXXXXXX',      // replace with your key id
    'razorpay_key_secret' => 'XXXXXXXXXXXXXXX',       // replace with your key secret
    'webhook_secret' => 'your_webhook_secret_here',   // webhook secret you set in Razorpay dashboard (recommended)
];

// require __DIR__."/../vendor/autoload.php";
// // live
// // define("YOUR_KEY_ID","rzp_live_RnzKOIw2vClTrr");
// // define("YOUR_KEY_SECRET","LVxqwOrkBAdHugvJPJwiK0h1");

// // testing
// define("YOUR_KEY_ID","rzp_test_RnzQv4040zjql5");
// define("YOUR_KEY_SECRET","9RGLldTAdbILjIjdRGnQ33NA");
// use Razorpay\Api\Api;

// $api = new Api(YOUR_KEY_ID, YOUR_KEY_SECRET);
// $money = 10;

// // Create an order
// $order = $api->order->create([
//     'receipt'         => 'order_rcptid_11',
//     'amount'          => 100*$money, // amount in paise
//     'currency'        => 'INR'
// ]);

// print_r($order);
