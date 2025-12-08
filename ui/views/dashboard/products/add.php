<?php
$service_id = $_GET['service_id'] ?? 1;
$service_name = "Notes & Study Material"; 

$service_data = findMany("services", 'status=:status AND service_id=:service_id', [
    'status' => 1,
    "service_id" => $route_data['params']['service_id']
], ['service_id', 'service_name']);
$services = [];
foreach ($service_data as $key => $data) {
    $services[$data['service_id']] = $data['service_name'];
}
?>
<div class="p-6 max-w-3xl mx-auto">
    <h1 class="text-2xl font-semibold mb-5">Add Product — <?= htmlspecialchars($service_name) ?></h1>

    <form action="" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow space-y-4">

        <!-- Select College -->
        <div>
            <label class="block mb-1 font-medium">Select College</label>
            <select name="service_id" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500">
                <?php foreach ($services as $id => $name): ?>
                    <option value="<?= $id ?>"><?= $name ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label class="block font-medium mb-1">Product Name</label>
            <input type="text" name="product_name" required class="w-full px-3 py-2 border rounded"
                placeholder="E.g. Semester 1 Notes">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block font-medium mb-1">Type</label>
                <select name="type" class="w-full border px-3 py-2 rounded">
                    <option value="PDF">PDF</option>
                    <option value="Video">Video</option>
                    <option value="admission">Admission</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div>
                <label class="block font-medium mb-1">Semester</label>
                <input type="text" name="semester" class="w-full px-3 py-2 border rounded"
                    placeholder="1 or Sem-1 or N/A">
            </div>
        </div>

        <div class="grid grid-cols-3 gap-4">
            <div>
                <label class="block font-medium mb-1">Price (₹)</label>
                <input type="number" step="0.01" name="price" class="w-full px-3 py-2 border rounded" value="0.00">
            </div>
            <div>
                <label class="block font-medium mb-1">Download Limit</label>
                <input type="number" name="download_limit" class="w-full px-3 py-2 border rounded" value="3" min="0">
            </div>
            <div>
                <label class="block font-medium mb-1">Expiry (days)</label>
                <input type="number" name="download_expiry_days" class="w-full px-3 py-2 border rounded" value="30"
                    min="0">
            </div>
        </div>

        <div>
            <label class="block font-medium mb-1">Summary</label>
            <input type="text" name="summary" class="w-full px-3 py-2 border rounded" placeholder="Short summary">
        </div>

        <div>
            <label class="block font-medium mb-1">Upload File</label>
            <input type="file" name="product_file" accept=".pdf,video/*,application/*" class="w-full">
            <p class="text-xs text-gray-500 mt-1">Allowed: PDF, MP4, ZIP etc. (Max: handle in backend)</p>
        </div>

        <div>
            <label class="block font-medium mb-1">Status</label>
            <select name="status" class="w-full border px-3 py-2 rounded">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <div class="flex gap-3">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save
                Product</button>
            <a href="service-products.php?service_id=<?= $service_id ?>" class="px-4 py-2 rounded border">Cancel</a>
        </div>
    </form>
</div>