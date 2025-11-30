<?php
// Dummy Customer
$customer = [
    "name" => "Rohit Sharma",
    "email" => "rohit@example.com",
    "mobile" => "9876543210",
];

// Dummy Order
$order = [
    "order_id" => 101,
    "subtotal" => 299.00,
    "processing_fee" => 10.00,
    "total" => 309.00,
    "status" => "paid",
    "created_at" => "2025-01-15",
];

// Dummy Products (order items)
$order_items = [
    [
        "product_name" => "BCA 1st Semester Notes",
        "price" => 199.00,
        "type" => "PDF",
        "semester" => "1",
    ],
    [
        "product_name" => "BCA Programming Video Course",
        "price" => 100.00,
        "type" => "Video",
        "semester" => "1",
    ],
];

// Dummy Payment
$payment = [
    "transaction_id" => "TXN123456ABC",
    "amount" => 309.00,
    "status" => "success",
    "created_at" => "2025-01-15 10:50 AM",
];
?>

<!-- Page Header -->
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Order Details</h1>

    <a href="<?= url("/dashboard") ?>/customers"
       class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded">
        Back
    </a>
</div>

<!-- Order Info + Customer Info -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

    <!-- Order Summary -->
    <div class="bg-white shadow rounded-xl p-5">
        <h2 class="text-lg font-semibold mb-3">Order Summary</h2>

        <p class="text-sm text-gray-500">Order ID</p>
        <p class="font-medium mb-3">#<?= $order["order_id"] ?></p>

        <p class="text-sm text-gray-500">Order Date</p>
        <p class="font-medium mb-3"><?= $order["created_at"] ?></p>

        <p class="text-sm text-gray-500">Status</p>
        <p class="mt-1">
            <?php if ($order["status"] === "paid"): ?>
                <span class="px-3 py-1 bg-green-100 text-green-700 rounded text-xs">Paid</span>
            <?php elseif ($order["status"] === "pending"): ?>
                <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded text-xs">Pending</span>
            <?php else: ?>
                <span class="px-3 py-1 bg-red-100 text-red-700 rounded text-xs">Failed</span>
            <?php endif; ?>
        </p>

        <div class="mt-4 border-t pt-3 text-sm">
            <div class="flex justify-between">
                <span>Subtotal</span>
                <span>₹<?= $order["subtotal"] ?></span>
            </div>
            <div class="flex justify-between">
                <span>Processing Fee</span>
                <span>₹<?= $order["processing_fee"] ?></span>
            </div>
            <div class="flex justify-between font-semibold text-lg mt-2">
                <span>Total</span>
                <span>₹<?= $order["total"] ?></span>
            </div>
        </div>
    </div>

    <!-- Customer Info -->
    <div class="bg-white shadow rounded-xl p-5">
        <h2 class="text-lg font-semibold mb-3">Customer Info</h2>

        <p class="text-sm text-gray-500">Name</p>
        <p class="font-medium mb-3"><?= $customer["name"] ?></p>

        <p class="text-sm text-gray-500">Email</p>
        <p class="font-medium mb-3"><?= $customer["email"] ?></p>

        <p class="text-sm text-gray-500">Mobile</p>
        <p class="font-medium mb-3"><?= $customer["mobile"] ?></p>
    </div>
</div>

<!-- Order Items -->
<div class="bg-white shadow rounded-xl p-5 mb-6">
    <h2 class="text-lg font-semibold mb-3">Order Items</h2>

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-100 text-left text-sm">
                <th class="p-3">Product</th>
                <th class="p-3">Type</th>
                <th class="p-3">Semester</th>
                <th class="p-3">Price</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($order_items as $item): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3 font-medium"><?= $item["product_name"] ?></td>
                    <td class="p-3"><?= $item["type"] ?></td>
                    <td class="p-3"><?= $item["semester"] ?></td>
                    <td class="p-3">₹<?= $item["price"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Payment Info -->
<div class="bg-white shadow rounded-xl p-5">
    <h2 class="text-lg font-semibold mb-3">Payment Info</h2>

    <p class="text-sm text-gray-500">Transaction ID</p>
    <p class="font-medium mb-3"><?= $payment["transaction_id"] ?></p>

    <p class="text-sm text-gray-500">Amount</p>
    <p class="font-medium mb-3">₹<?= $payment["amount"] ?></p>

    <p class="text-sm text-gray-500">Payment Status</p>
    <p>
        <?php if ($payment["status"] === "success"): ?>
            <span class="px-3 py-1 bg-green-100 text-green-700 rounded text-xs">Success</span>
        <?php elseif ($payment["status"] === "processing"): ?>
            <span class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded text-xs">Processing</span>
        <?php else: ?>
            <span class="px-3 py-1 bg-red-100 text-red-700 rounded text-xs">Failed</span>
        <?php endif; ?>
    </p>

    <p class="text-sm text-gray-500 mt-3">Paid At</p>
    <p class="font-medium"><?= $payment["created_at"] ?></p>
</div>
