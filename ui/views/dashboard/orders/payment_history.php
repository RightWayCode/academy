<?php
$payments = [
    [
        "id" => 1,
        "transaction_id" => "TXN123456",
        "amount" => 420,
        "status" => "success",
        "date" => "2025-11-30 12:40 PM"
    ]
];
?>

<div class="p-6">
    <h1 class="text-2xl font-semibold mb-6">Payment History</h1>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 border">Payment ID</th>
                    <th class="p-3 border">Transaction ID</th>
                    <th class="p-3 border">Amount</th>
                    <th class="p-3 border">Status</th>
                    <th class="p-3 border">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($payments as $p): ?>
                <tr class="hover:bg-gray-50">
                    <td class="p-3 border"><?= $p['id'] ?></td>
                    <td class="p-3 border"><?= $p['transaction_id'] ?></td>
                    <td class="p-3 border">₹<?= $p['amount'] ?></td>
                    <td class="p-3 border">
                        <span class="px-2 py-1 bg-green-200 text-green-800 rounded">
                            <?= ucfirst($p['status']) ?>
                        </span>
                    </td>
                    <td class="p-3 border"><?= $p['date'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
