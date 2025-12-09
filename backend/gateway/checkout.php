<?php
require('vendor/autoload.php');
use Razorpay\Api\Api;

$keyId = "rzp_test_RnzQv4040zjql5";
$keySecret = "9RGLldTAdbILjIjdRGnQ33NA";

$api = new Api($keyId, $keySecret);

// Form Data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$amount = $_POST['amount'];

$orderData = [
    "receipt" => "ORD_" . time(),
    "amount" => $amount * 100,
    "currency" => "INR"
];

$order = $api->order->create($orderData);
$order_id = $order['id'];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Pay Now</title>
</head>

<body style="font-family: Arial; text-align:center; margin-top: 60px;">

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>

        var options = {
            "key": "<?php echo $keyId; ?>",
            "amount": "<?php echo $amount; ?>",
            "currency": "INR",
            "name": "<?php echo $name; ?>",
            "description": "Payment for order",
            "order_id": "<?php echo $order_id; ?>",

            // 🟢 Prefill Razorpay Checkout with User Details
            "prefill": {
                "name": "<?php echo $name; ?>",
                "email": "<?php echo $email; ?>",
                "contact": "<?php echo $phone; ?>"
            },

            // 🟢 Additional Notes (optional)
            "notes": {
                "customer_name": "<?php echo $name; ?>",
                "customer_email": "<?php echo $email; ?>",
                "customer_phone": "<?php echo $phone; ?>"
            },

            // SUCCESS → redirect
            "handler": function (response) {
                window.location.href =
                    "<?= url('/checkout/') ?>verify?payment_id=" + response.razorpay_payment_id +
                    "&order_id=" + response.razorpay_order_id +
                    "&signature=" + response.razorpay_signature;
            },

            // FAIL / CLOSE → redirect
            "modal": {
                "ondismiss": function () {
                    window.location.href = "<?= url('/checkout/') ?>failed";
                }
            }
        };

        var rzp = new Razorpay(options);
        rzp.open();
    </script>

</body>

</html>