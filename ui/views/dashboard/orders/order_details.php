<?php 
$order = [
    "id" => 101,
    "customer" => "Vishal Kumar",
    "email" => "vishal@example.com",
    "mobile" => "9876543210",
    "subtotal" => 400,
    "processing_fee" => 20,
    "total" => 420,
    "status" => "paid",
    "date" => "2025-11-30"
];

$items = [
    ["name" => "BCA 1st Sem Notes", "price" => 200],
    ["name" => "BCA 2nd Sem Notes", "price" => 200],
];
?>

<div class="p-6">
    <h1 class="text-2xl font-semibold mb-6">Order Details (#<?= $order['id'] ?>)</h1>

    <!-- Customer Info -->
    <div class="bg-white shadow rounded p-5 mb-6">
        <h2 class="font-semibold text-lg mb-3">Customer Info</h2>
        <p><strong>Name:</strong> <?= $order['customer'] ?></p>
        <p><strong>Email:</strong> <?= $order['email'] ?></p>
        <p><strong>Mobile:</strong> <?= $order['mobile'] ?></p>
    </div>

    <!-- Order Summary -->
    <div class="bg-white shadow rounded p-5 mb-6">
        <h2 class="font-semibold text-lg mb-3">Order Summary</h2>
        <p><strong>Subtotal:</strong> ₹<?= $order['subtotal'] ?></p>
        <p><strong>Processing Fee:</strong> ₹<?= $order['processing_fee'] ?></p>
        <p><strong>Total:</strong> ₹<?= $order['total'] ?></p>
        <p><strong>Status:</strong> 
            <span class="px-2 py-1 bg-green-200 text-green-700 rounded">
                <?= ucfirst($order['status']) ?>
            </span>
        </p>
    </div>

    <!-- Order Items -->
    <div class="bg-white shadow rounded p-5">
        <h2 class="font-semibold text-lg mb-4">Order Items</h2>

        <table class="min-w-full border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 border">Item</th>
                    <th class="p-3 border">Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                <tr class="hover:bg-gray-50">
                    <td class="p-3 border"><?= $item['name'] ?></td>
                    <td class="p-3 border">₹<?= $item['price'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- View Payment History -->
    <a href="<?= url("/dashboard") ?>/orders/payment_history?order_id=<?= $order['id'] ?>" 
       class="mt-6 inline-block px-5 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
       View Payment History
    </a>
</div>
