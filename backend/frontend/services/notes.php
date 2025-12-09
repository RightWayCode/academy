<?php

$cookie_data = [];

// पुराना डेटा अगर मौजूद है तो पहले पढ़ लो
if (isset($_COOKIE['cart_items'])) {
    $cookie_data = json_decode($_COOKIE['cart_items'], true);
    if (!is_array($cookie_data)) {
        $cookie_data = [];
    }
}

if ($_GET['request'] == "cart_add") {

    $product_id = $_POST['product_id'];

    // duplicate चेक ताकि same product दो बार न जुड़े
    if (!in_array($product_id, $cookie_data)) {
        $cookie_data[] = $product_id;
    }

    // updated cookie save
    setcookie("cart_items", json_encode($cookie_data), time() + (86400 * cookie_expire_date), "/");
}

// redirect (आपकी function के हिसाब से)
location("/cart");
exit;
