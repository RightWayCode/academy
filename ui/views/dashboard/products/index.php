<?php
// Dummy context (service & course)
$course_name = "B.Tech Computer Science";
$service = ['service_id' => 1, 'service_name' => 'Notes & Study Material'];

$service_data = findMany("services", 'status=:status AND service_id=:service_id', [
    'status' => 1,
    "service_id" => $route_data['params']['service_id']
], ['service_id', 'service_name']);
$services = [];
foreach ($service_data as $key => $data) {
    $services[$data['service_id']] = $data['service_name'];
}
$products = findMany('products',"service_id=:service_id",["service_id" => $route_data['params']['service_id']]);
?>
<div class="p-6">
    <div class="flex items-center justify-between mb-5">
        <div>
            <h1 class="text-2xl font-semibold">Products</h1>
        </div>
        <a href="<?= url("/dashboard") ?>/<?= $route_data['params']['college_id'] ?>/<?= $route_data['params']['course_id'] ?>/<?= $route_data['params']['service_id'] ?>/product/add"
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
                            <a href="<?= url("/dashboard") ?>/product/delete?id=<?= $p['product_id'] ?>"
                                class="text-red-600 hover:underline"
                                onclick="return confirm('Delete this product?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>