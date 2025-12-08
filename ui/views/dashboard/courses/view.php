<?php
$course_id = $_GET['id'] ?? 0;

// 1. Fetch Course Data
$course = findOne("courses", "course_id=:id", ["id" => $course_id]);

if (!$course) {
    die("Course Not Found");
}

$course_name = $course['course_name'];

// 2. Fetch Services from DB
$services = findMany(
    "services",
    "course_id=:cid AND status=:st",
    [
        "cid" => $course_id,
        "st" => 1
    ]
);

?>

<div class="p-6">
    <h1 class="text-2xl font-semibold mb-4">
        Services for: <?= htmlspecialchars($course_name) ?>
    </h1>

    <div class="bg-white shadow rounded-lg overflow-hidden">

        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse text-left">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="px-4 py-3">Service Name</th>
                        <th class="px-4 py-3">Description</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($services)): ?>
                        <?php foreach ($services as $s): ?>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3 font-medium">
                                <?= htmlspecialchars($s['service_name']) ?>
                            </td>

                            <td class="px-4 py-3">
                                <?= htmlspecialchars($s['description']) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="2" class="px-4 py-6 text-gray-500 text-center">
                                No services found for this course.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>

    <a href="<?= url("/dashboard") ?>/<?= $course['college_id'] ?>/courses"
       class="inline-block mt-4 text-blue-600 hover:underline">
       ← Back to Courses
    </a>
</div>
