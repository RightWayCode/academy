<?php
// Dummy customer
$customer = [
    "customer_id" => 1,
    "name" => "Rohit Sharma",
    "email" => "rohit@example.com",
    "mobile" => "9876543210",
];

// Dummy orders
$orders = [
    [
        "order_id" => 101,
        "subtotal" => 299.00,
        "processing_fee" => 10.00,
        "total" => 309.00,
        "status" => "paid",
        "created_at" => "2025-01-15"
    ],
    [
        "order_id" => 102,
        "subtotal" => 499.00,
        "processing_fee" => 0,
        "total" => 499.00,
        "status" => "pending",
        "created_at" => "2025-01-18"
    ],
];
?>

<!-- Header -->
<div class="mb-6">
    <h1 class="text-2xl font-bold mb-1">Customer Orders</h1>
    <p class="text-gray-500 text-sm">Customer ID: <?= $customer["customer_id"] ?></p>
</div>

<!-- Customer Info -->
<div class="bg-white shadow rounded-xl p-4 mb-6">
    <h2 class="text-lg font-semibold mb-3">Customer Info</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <p class="text-sm text-gray-500">Name</p>
            <p class="font-medium"><?= $customer["name"] ?></p>
        </div>
        <div>
            <p class="text-sm text-gray-500">Email</p>
            <p class="font-medium"><?= $customer["email"] ?></p>
        </div>
        <div>
            <p class="text-sm text-gray-500">Mobile</p>
            <p class="font-medium"><?= $customer["mobile"] ?></p>
        </div>
    </div>
</div>

<!-- Order List -->
<div class="bg-white shadow rounded-xl p-4">
    <h2 class="text-lg font-semibold mb-3">Orders</h2>

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-100 text-left text-sm">
                <th class="p-3">Order ID</th>
                <th class="p-3">Subtotal</th>
                <th class="p-3">Fee</th>
                <th class="p-3">Total</th>
                <th class="p-3">Status</th>
                <th class="p-3">Date</th>
                <th class="p-3 text-center">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($orders as $o): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3 font-medium"><?= $o["order_id"] ?></td>
                    <td class="p-3">₹<?= $o["subtotal"] ?></td>
                    <td class="p-3">₹<?= $o["processing_fee"] ?></td>
                    <td class="p-3 font-semibold">₹<?= $o["total"] ?></td>

                    <td class="p-3">
                        <?php if ($o["status"] === "paid"): ?>
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-xs rounded">Paid</span>
                        <?php elseif ($o["status"] === "pending"): ?>
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-700 text-xs rounded">Pending</span>
                        <?php else: ?>
                            <span class="px-3 py-1 bg-red-100 text-red-700 text-xs rounded">Failed</span>
                        <?php endif; ?>
                    </td>

                    <td class="p-3"><?= $o["created_at"] ?></td>

                    <td class="p-3 text-center">
                        <a href="<?= url("/dashboard") ?>/customer/order_details?id=<?= $o['order_id'] ?>"
                           class="px-4 py-1 rounded bg-blue-600 text-white text-sm hover:bg-blue-700">
                           View Details
                        </a>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
