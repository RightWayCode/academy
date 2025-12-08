<?php
// Dummy existing data
$service = [
    'course_id' => 1,
    'service_name' => 'Notes & Study Material',
    'description' => 'All semester-wise notes',
    'status' => 1
];
?>

<div class="p-6 max-w-xl mx-auto">
    <h1 class="text-2xl font-semibold mb-5">Edit Service</h1>

    <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow">

        <div class="mb-4">
            <label class="block font-medium mb-1">Service Name</label>
            <input type="text" name="service_name"
                   value="<?= $service['service_name'] ?>"
                   class="w-full px-3 py-2 border rounded">
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Description</label>
            <textarea name="description"
                      class="w-full px-3 py-2 border rounded"><?= $service['description'] ?></textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Status</label>
            <select name="status" class="w-full border px-3 py-2 rounded">
                <option value="1" <?= $service['status'] ? 'selected' : '' ?>>Active</option>
                <option value="0" <?= !$service['status'] ? 'selected' : '' ?>>Inactive</option>
            </select>
        </div>

        <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Update Service
        </button>
    </form>
</div>
