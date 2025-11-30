<?php
$colleges = [
    1 => "Delhi Institute of Technology",
    2 => "Mumbai College of Engineering",
];
?>

<div class="p-6 max-w-xl mx-auto">
    <h1 class="text-2xl font-semibold mb-5">Add New Course</h1>

    <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow">

        <div class="mb-4">
            <label class="block font-medium mb-1">Select College</label>
            <select name="college_id" class="w-full border px-3 py-2 rounded">
                <?php foreach ($colleges as $id => $name): ?>
                <option value="<?= $id ?>"><?= $name ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Course Name</label>
            <input type="text" name="course_name"
                   class="w-full px-3 py-2 border rounded focus:ring focus:border-blue-500"
                   placeholder="Enter course name">
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block font-medium mb-1">Duration (Years)</label>
                <input type="number" name="duration_years"
                       class="w-full px-3 py-2 border rounded"
                       min="1" max="6">
            </div>

            <div>
                <label class="block font-medium mb-1">Semesters</label>
                <input type="number" name="semesters"
                       class="w-full px-3 py-2 border rounded"
                       min="1" max="12">
            </div>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Status</label>
            <select name="status" class="w-full border px-3 py-2 rounded">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Save Course
        </button>
    </form>
</div>
