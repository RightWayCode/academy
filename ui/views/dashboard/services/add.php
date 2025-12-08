<?php

$course_data = findMany("courses", 'status=:status AND course_id=:course_id', [
    'status' => 1,
    "course_id" => $route_data['params']['course_id']
], ['course_id', 'course_name']);
$colleges = [];
foreach ($colleges_data as $key => $data) {
    $colleges[$data['course_id']] = $data['course_name'];
}

?>
<div class="p-6 max-w-xl mx-auto">
    <h1 class="text-2xl font-semibold mb-5">Add New Service</h1>

    <form action="" method="POST" class="bg-white p-6 rounded-lg shadow">

        <!-- Select Course -->
        <div>
            <label class="block mb-1 font-medium">Select Course</label>
            <select name="course_id" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500">
                <?php foreach ($colleges as $id => $name): ?>
                    <option value="<?= $id ?>"><?= $name ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Service Name</label>
            <input type="text" name="service_name" class="w-full px-3 py-2 border rounded"
                placeholder="Enter service name">
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Description</label>
            <textarea name="description" class="w-full px-3 py-2 border rounded" placeholder="Enter details"></textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Status</label>
            <select name="status" class="w-full border px-3 py-2 rounded">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Save Service
        </button>
    </form>
</div>