<?php

$colleges_data = findMany("colleges", 'status=:status AND college_id=:college_id', [
    'status' => 1,
    "college_id" => $route_data['params']['college_id']
], ['college_id', 'college_name']);

$colleges = [];
foreach ($colleges_data as $key => $data) {
    $colleges[$data['college_id']] = $data['college_name'];
}

?>

<div class="p-6 max-w-3xl">

    <h2 class="text-2xl font-semibold mb-6">Add New Course</h2>

    <form action="" method="POST" class="space-y-5">

        <input type="hidden" name="college_id" value="<?= $route_data['params']['college_id'] ?>" id="">
        <!-- Course Name -->
        <div>
            <label class="block mb-1 font-medium">Course Name</label>
            <input type="text" name="course_name"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500"
                placeholder="Enter course name">
        </div>

        <!-- Slug -->
        <div>
            <label class="block mb-1 font-medium">Slug</label>
            <input type="text" name="slug" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500"
                placeholder="auto-generated or custom slug">
        </div>

        <!-- Duration -->
        <div>
            <label class="block mb-1 font-medium">Duration (Years)</label>
            <input type="number" name="duration_years"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500" min="1" max="6"
                value="3">
        </div>

        <!-- Status -->
        <div>
            <label class="block mb-1 font-medium">Status</label>
            <select name="status" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <!-- Button -->
        <button class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Save Course
        </button>

    </form>

</div>