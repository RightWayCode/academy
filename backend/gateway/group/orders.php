<?php
$cust_id = 1;
$od_id = 1;
// $cust_id = insertData("customers", [
//     "name" => $name,
//     "email" => $email,
//     "mobile" => $phone,
//     "remarks" => $remarks,
//     "status" => 0,
// ]);

// $od_id = insertData("orders", [
//     "customer_id" => $cust_id,
//     "subtotal" => $subtotal,
//     "processing_fee" => $processing_fee,
//     "total" => $amount,
//     "status" => 0,
// ]);

// foreach ($product_ids as $product_id) {
//     insertData("order_items", [
//         "order_id" => $od_id,
//         "product_id" => $product_id
//     ]);
// }
$_SESSION['order_id']=$od_id;
// hole($od_id);
