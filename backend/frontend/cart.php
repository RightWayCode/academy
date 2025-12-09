<?php
$remove_product_id = $_GET["product_id"];

if (isset($_COOKIE['cart_items'])) {
    $cookie_data = json_decode($_COOKIE['cart_items'], true);
} else {
    $cookie_data = [];
}

// REMOVE REQUEST
if ($_GET['request'] == "remove") {

    if (($key = array_search($remove_product_id, $cookie_data)) !== false) {
        unset($cookie_data[$key]);
    }

    $cookie_data = array_values($cookie_data);

    setcookie("cart_items", json_encode($cookie_data), time() + (86400 * cookie_expire_date), "/");
}

// redirect
header("Location: ".$_SESSION['get_path']);
exit;
