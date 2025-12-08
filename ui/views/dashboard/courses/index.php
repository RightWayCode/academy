<?php
$colleges_data = findMany(
    "college",
    'status=:status AND college_id=:college_id',
    [
        'status' => 1,
        "college_id" => $route_data['params']['college_id']
    ],
    ['college_id', 'college_name']
);

$colleges = [];
foreach ($colleges_data as $data) {
    $colleges[$data['college_id']] = $data['college_name'];
}

$courses = findMany(
    "courses",
    "college_id=:college_id",
    ["college_id" => $route_data['params']['college_id']]
);
?>

<div class="p-6">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-4 mb-6">
        <h1 class="text-2xl font-semibold">Course Management</h1>

        <a href="<?= url("/dashboard") ?>/<?= $route_data['params']['college_id'] ?>/course/add"
           class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
            + Add New Course
        </a>
    </div>

    <!-- Table Container (Responsive Scroll) -->
    <div class="bg-white shadow rounded-lg overflow-hidden">

        <div class="overflow-x-auto">
            <table class="min-w-full text-left border-collapse">
                <thead class="bg-gray-100 border-b text-sm">
                    <tr>
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Course Name</th>
                        <th class="px-4 py-3">College</th>
                        <th class="px-4 py-3">Duration</th>
                        <th class="px-4 py-3">Semesters</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3 text-right">Actions</th>
                    </tr>
                </thead>

                <tbody class="text-sm">

                <?php if (!empty($courses)): ?>
                    <?php foreach ($courses as $c): ?>
                        <tr class="border-b hover:bg-gray-50 transition">
                            <td class="px-4 py-3 font-medium"><?= $c['course_id'] ?></td>

                            <td class="px-4 py-3"><?= htmlspecialchars($c['course_name']) ?></td>

                            <td class="px-4 py-3"><?= $colleges[$c['college_id']] ?? "N/A" ?></td>

                            <td class="px-4 py-3"><?= $c['duration_years'] ?> Years</td>

                            <td class="px-4 py-3"><?= $c['semesters'] ?></td>

                            <td class="px-4 py-3">
                                <?php if ($c['status']): ?>
                                    <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded-full">Active</span>
                                <?php else: ?>
                                    <span class="px-2 py-1 text-xs bg-red-100 text-red-700 rounded-full">Inactive</span>
                                <?php endif; ?>
                            </td>

                            <td class="px-4 py-3">
                                <div class="flex justify-end gap-3 text-sm">

                                    <a href="<?= url("/dashboard") ?>/<?= $route_data['params']['college_id'] ?>/<?= $c['course_id'] ?>/services"
                                       class="text-blue-600 hover:underline">
                                       Services
                                    </a>

                                    <a href="<?= url("/dashboard") ?>/course/view?id=<?= $c['course_id'] ?>"
                                       class="text-blue-600 hover:underline">
                                       View
                                    </a>

                                    <a href="<?= url("/dashboard") ?>/course/edit?id=<?= $c['course_id'] ?>"
                                       class="text-yellow-500 hover:underline">
                                       Edit
                                    </a>

                                    <a href="<?= url("/dashboard") ?>/course/delete?id=<?= $c['course_id'] ?>"
                                       class="text-red-600 hover:underline"
                                       onclick="return confirm('Delete this course?')">
                                       Delete
                                    </a>

                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center py-6 text-gray-500">
                            No courses found.
                        </td>
                    </tr>
                <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
