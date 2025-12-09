<!DOCTYPE html>
<html>

<head>
    <title>Payment Successful</title>
</head>

<body style="font-family: Arial; text-align:center; margin-top:60px;">

    <h1>🎉 Payment Successful!</h1>
    <p>Your payment ID:</p>
    <h2><?php echo $_GET['payment_id']; ?></h2>

    <a href="/" style="
 padding:10px 20px; background:green; color:#fff; text-decoration:none;">
        Back to home
    </a>

</body>

</html>