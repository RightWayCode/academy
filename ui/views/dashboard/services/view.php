<?php
// Dummy service name
$service_name = "Notes & Study Material";

// Dummy products
$products = [
    ['product_id' => 1, 'product_name' => 'Semester 1 Notes', 'type' => 'PDF', 'price' => 199, 'semester' => '1'],
    ['product_id' => 2, 'product_name' => 'Semester 2 Notes', 'type' => 'PDF', 'price' => 199, 'semester' => '2'],
];
?>

<div class="p-6">
    <h1 class="text-2xl font-semibold mb-4">Products — <?= $service_name ?></h1>

    <div class="bg-white shadow rounded-lg overflow-hidden">

        <table class="min-w-full text-left border-collapse">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-4 py-2">Product Name</th>
                    <th class="px-4 py-2">Type</th>
                    <th class="px-4 py-2">Semester</th>
                    <th class="px-4 py-2">Price</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($products as $p): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2"><?= $p['product_name'] ?></td>
                    <td class="px-4 py-2"><?= $p['type'] ?></td>
                    <td class="px-4 py-2"><?= $p['semester'] ?></td>
                    <td class="px-4 py-2">₹<?= $p['price'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </div>

    <a href="<?= url("/dashboard") ?>/services?course_id=1" 
       class="inline-block mt-4 text-blue-600 hover:underline">
       ← Back to Services
    </a>
</div>
