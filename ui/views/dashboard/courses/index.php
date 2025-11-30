<?php
// Dummy colleges
$colleges = [
    1 => "Delhi Institute of Technology",
    2 => "Mumbai College of Engineering",
];

// Dummy courses
$courses = [
    ['course_id' => 1, 'course_name' => 'B.Tech Computer Science', 'college_id' => 1, 'duration_years' => 4, 'semesters' => 8, 'status' => 1],
    ['course_id' => 2, 'course_name' => 'BCA', 'college_id' => 1, 'duration_years' => 3, 'semesters' => 6, 'status' => 1],
    ['course_id' => 3, 'course_name' => 'Mechanical Engineering', 'college_id' => 2, 'duration_years' => 4, 'semesters' => 8, 'status' => 0],
];
?>

<div class="p-6">
    <div class="flex justify-between items-center mb-5">
        <h1 class="text-2xl font-semibold">Course Management</h1>

        <a href="<?= url("/dashboard") ?>/course/add"
            class="bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700">
            + Add New Course
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">

        <table class="min-w-full text-left border-collapse">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Course Name</th>
                    <th class="px-4 py-2">College</th>
                    <th class="px-4 py-2">Duration</th>
                    <th class="px-4 py-2">Semesters</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2 text-right">Actions</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($courses as $c): ?>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-2"><?= $c['course_id'] ?></td>

                        <td class="px-4 py-2 font-medium"><?= $c['course_name'] ?></td>

                        <td class="px-4 py-2"><?= $colleges[$c['college_id']] ?></td>

                        <td class="px-4 py-2"><?= $c['duration_years'] ?> Years</td>

                        <td class="px-4 py-2"><?= $c['semesters'] ?></td>

                        <td class="px-4 py-2">
                            <?= $c['status'] ?
                                '<span class="text-green-600 font-semibold">Active</span>' :
                                '<span class="text-red-600 font-semibold">Inactive</span>' ?>
                        </td>

                        <td class="px-4 py-2 flex gap-3 justify-end">
                            <a href="<?= url("/dashboard") ?>/course/view?id=<?= $c['course_id'] ?>"
                                class="text-blue-600 hover:underline">View</a>

                            <a href="<?= url("/dashboard") ?>/course/edit?id=<?= $c['course_id'] ?>"
                                class="text-yellow-600 hover:underline">Edit</a>

                            <a href="<?= url("/dashboard") ?>/course/delete?id=<?= $c['course_id'] ?>"
                                class="text-red-600 hover:underline"
                                onclick="return confirm('Delete this course?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>
</div>