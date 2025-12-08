<?php

$colleges_data = findMany("college", 'status=:status AND college_id=:college_id', [
    'status' => 1,
    "college_id"=> $route_data['params']['college_id']
], ['college_id','college_name']);

$colleges = [];
foreach ($colleges_data as $key => $data) {
    $colleges[$data['college_id']]=$data['college_name'];
}

?>

<div class="p-6 max-w-3xl">

    <h2 class="text-2xl font-semibold mb-6">Add New Course</h2>

    <form action="" method="POST" class="space-y-5">

        <!-- Select College -->
        <div>
            <label class="block mb-1 font-medium">Select College</label>
            <select name="college_id" class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500">
                <?php foreach ($colleges as $id => $name): ?>
                    <option value="<?= $id ?>"><?= $name ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Course Name -->
        <div>
            <label class="block mb-1 font-medium">Course Name</label>
            <input type="text" name="course_name"
                class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500"
                placeholder="Enter course name">
        </div>

        <!-- Duration & Semesters -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block mb-1 font-medium">Duration (Years)</label>
                <input type="number" name="duration_years"
                    class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500" min="1" max="6"
                    placeholder="e.g. 3">
            </div>

            <div>
                <label class="block mb-1 font-medium">Semesters</label>
                <input type="number" name="semesters"
                    class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500" min="1" max="12"
                    placeholder="e.g. 6">
            </div>
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