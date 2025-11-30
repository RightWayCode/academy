<?php
$invoice = [
    "invoice_no" => "INV-2025-001",
    "order_id" => 101,
    "customer" => "Vishal Kumar",
    "email" => "vishal@example.com",
    "total" => 420,
];

$items = [
    ["name" => "BCA 1st Sem Notes", "price" => 200],
    ["name" => "BCA 2nd Sem Notes", "price" => 200],
];
?>

<div class="p-10 bg-white max-w-3xl mx-auto shadow-lg">
    <h1 class="text-3xl font-semibold mb-6">Invoice</h1>

    <div class="mb-6">
        <p><strong>Invoice No:</strong> <?= $invoice['invoice_no'] ?></p>
        <p><strong>Order ID:</strong> #<?= $invoice['order_id'] ?></p>
        <p><strong>Customer:</strong> <?= $invoice['customer'] ?></p>
        <p><strong>Email:</strong> <?= $invoice['email'] ?></p>
    </div>

    <table class="min-w-full border mb-6">
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

    <div class="text-right text-xl font-bold">
        Total: ₹<?= $invoice['total'] ?>
    </div>

    <button onclick="window.print()" 
            class="mt-6 px-6 py-2 bg-black text-white rounded hover:bg-gray-800">
        Print Invoice
    </button>
</div>
