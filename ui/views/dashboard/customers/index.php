<?php
$customers = [
    [
        "customer_id" => 1,
        "name" => "Rohit Sharma",
        "email" => "rohit@example.com",
        "mobile" => "9876543210",
        "created_at" => "2025-01-10"
    ],
    [
        "customer_id" => 2,
        "name" => "Priya Singh",
        "email" => "priya@example.com",
        "mobile" => "9123456780",
        "created_at" => "2025-01-12"
    ]
];
?>

<!-- Page Title -->
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Customers</h1>
</div>

<!-- Customer Table -->
<div class="bg-white shadow rounded-xl p-4">
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-100 text-left text-sm">
                <th class="p-3">#</th>
                <th class="p-3">Name</th>
                <th class="p-3">Email</th>
                <th class="p-3">Mobile</th>
                <th class="p-3">Created At</th>
                <th class="p-3 text-center">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($customers as $c): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3"><?= $c["customer_id"] ?></td>
                    <td class="p-3 font-medium"><?= $c["name"] ?></td>
                    <td class="p-3"><?= $c["email"] ?></td>
                    <td class="p-3"><?= $c["mobile"] ?></td>
                    <td class="p-3"><?= $c["created_at"] ?></td>

                    <td class="p-3 text-center">
                        <a href="<?= url("/dashboard") ?>/customer/orders?id=<?= $c['customer_id'] ?>"
                           class="px-4 py-1 rounded bg-blue-600 text-white text-sm hover:bg-blue-700">
                           View Orders
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
