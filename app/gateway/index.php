<?php
// public/index.php
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Pay with Razorpay</title>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
  <h2>Buy ₹500 product</h2>
  <button id="payBtn">Pay ₹500</button>

<script>
document.getElementById('payBtn').addEventListener('click', async function(){
  // create order on server
  const resp = await fetch('/create_order.php', { method: 'POST' });
  const data = await resp.json();
  if (!data || data.status !== 'success') {
    alert('Order creation failed');
    return;
  }
  const order = data.order;

  const options = {
    "key": "rzp_test_XXXXXXXXXXXX", // Replace with your KEYID (public)
    "amount": order.amount.toString(),
    "currency": order.currency,
    "name": "Your Business Name",
    "description": "Purchase Description",
    "image": "https://example.com/logo.png",
    "order_id": order.id,
    "handler": function (response){
      // response contains: razorpay_payment_id, razorpay_order_id, razorpay_signature
      // Send these to the server to verify signature & store details
      fetch('/verify.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(response)
      }).then(r => r.json()).then(res => {
        if (res && res.verified) {
          window.location = '/public/success.php?payment_id=' + response.razorpay_payment_id;
        } else {
          alert('Payment verification failed on server.');
        }
      });
    },
    "prefill": {
      "name": "Customer name",
      "email": "customer@example.com",
      "contact": "9999999999"
    },
    "theme": {
      "color": "#3399cc"
    }
  };

  const rzp1 = new Razorpay(options);
  rzp1.open();
});
</script>
</body>
</html>
