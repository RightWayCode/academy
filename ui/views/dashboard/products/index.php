<?php
// Dummy context (service & course)
$course_name = "B.Tech Computer Science";
$service = ['service_id' => 1, 'service_name' => 'Notes & Study Material'];

// Dummy products
$products = [
    ['product_id' => 1, 'product_name' => 'Sem 1 Notes', 'semester' => '1', 'type' => 'PDF', 'price' => 199.00, 'download_limit' => 3, 'download_expiry_days' => 30, 'status' => 1, 'file_path' => '/files/sem1.pdf', 'summary' => 'Introduction to basics'],
    ['product_id' => 2, 'product_name' => 'Sem 2 Video Lectures', 'semester' => '2', 'type' => 'Video', 'price' => 399.00, 'download_limit' => 2, 'download_expiry_days' => 60, 'status' => 1, 'file_path' => '/files/sem2.mp4', 'summary' => 'Lectures for semester 2'],
    ['product_id' => 3, 'product_name' => 'Admission Guide', 'semester' => 'N/A', 'type' => 'admission', 'price' => 0.00, 'download_limit' => 1, 'download_expiry_days' => 365, 'status' => 0, 'file_path' => '', 'summary' => 'Admission process guide'],
];
?>
<div class="p-6">
    <div class="flex items-center justify-between mb-5">
        <div>
            <h1 class="text-2xl font-semibold">Products — <?= htmlspecialchars($service['service_name']) ?></h1>
            <p class="text-sm text-gray-500">Course: <?= htmlspecialchars($course_name) ?></p>
        </div>
        <!-- <div class="flex gap-3">
            <a href="<?= url("/dashboard") ?>/product/add?service_id=<?= $service['service_id'] ?>"
               class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">+ Add Product</a>
            <a href="service-list.php" class="px-4 py-2 rounded border">← Back to Services</a>
        </div> -->
        <a href="<?= url("/dashboard") ?>/product/add"
            class="bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700">
            + Add Product
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full text-left border-collapse">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Product</th>
                    <th class="px-4 py-2">Type</th>
                    <th class="px-4 py-2">Semester</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Downloads</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $p): ?>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2"><?= $p['product_id'] ?></td>
                        <td class="px-4 py-2 font-medium"><?= htmlspecialchars($p['product_name']) ?>
                            <div class="text-xs text-gray-500"><?= htmlspecialchars($p['summary']) ?></div>
                        </td>
                        <td class="px-4 py-2"><?= $p['type'] ?></td>
                        <td class="px-4 py-2"><?= $p['semester'] ?></td>
                        <td class="px-4 py-2">₹<?= number_format($p['price'], 2) ?></td>
                        <td class="px-4 py-2"><?= $p['download_limit'] ?> / <?= $p['download_expiry_days'] ?>d</td>
                        <td class="px-4 py-2">
                            <?= $p['status'] ? '<span class="text-green-600 font-semibold">Active</span>' : '<span class="text-red-600 font-semibold">Inactive</span>' ?>
                        </td>
                        <td class="px-4 py-2 flex gap-3 justify-end">
                            <a href="<?= url("/dashboard") ?>/product/view?id=<?= $p['product_id'] ?>"
                                class="text-blue-600 hover:underline">View</a>
                            <a href="<?= url("/dashboard") ?>/product/edit?id=<?= $p['product_id'] ?>"
                                class="text-yellow-600 hover:underline">Edit</a>
                            <a href="<?= url("/dashboard") ?>/product/delete?id=<?= $p['product_id'] ?>" class="text-red-600 hover:underline"
                                onclick="return confirm('Delete this product?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>