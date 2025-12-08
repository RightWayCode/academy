<?php
$colleges = [
    1 => "Delhi Institute of Technology",
    2 => "Mumbai College of Engineering",
];

// Dummy selected course
$course = [
    'college_id' => 1,
    'course_name' => 'B.Tech Computer Science',
    'duration_years' => 4,
    'semesters' => 8,
    'status' => 1,
];
?>

<div class="p-6 max-w-xl mx-auto">
    <h1 class="text-2xl font-semibold mb-5">Edit Course</h1>

    <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow">

        <div class="mb-4">
            <label class="block font-medium mb-1">Select College</label>
            <select name="college_id" class="w-full border px-3 py-2 rounded">
                <?php foreach ($colleges as $id => $name): ?>
                <option value="<?= $id ?>" 
                    <?= $course['college_id'] == $id ? 'selected' : '' ?>>
                    <?= $name ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Course Name</label>
            <input type="text" name="course_name"
                   value="<?= $course['course_name'] ?>"
                   class="w-full px-3 py-2 border rounded focus:ring focus:border-blue-500">
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block font-medium mb-1">Duration (Years)</label>
                <input type="number" name="duration_years"
                       value="<?= $course['duration_years'] ?>"
                       class="w-full px-3 py-2 border rounded">
            </div>

            <div>
                <label class="block font-medium mb-1">Semesters</label>
                <input type="number" name="semesters"
                       value="<?= $course['semesters'] ?>"
                       class="w-full px-3 py-2 border rounded">
            </div>
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Status</label>
            <select name="status" class="w-full border px-3 py-2 rounded">
                <option value="1" <?= $course['status'] ? 'selected' : '' ?>>Active</option>
                <option value="0" <?= !$course['status'] ? 'selected' : '' ?>>Inactive</option>
            </select>
        </div>

        <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Update Course
        </button>
    </form>
</div>
