<?php
$course_name = "B.Tech Computer Science";

// Dummy services
$services = [
    ['service_name' => 'Notes & Study Material', 'description' => 'Complete semester-wise notes'],
    ['service_name' => 'Video Lectures', 'description' => 'Full syllabus video lectures'],
];
?>

<div class="p-6">
    <h1 class="text-2xl font-semibold mb-4">Services for: <?= $course_name ?></h1>

    <div class="bg-white shadow rounded-lg overflow-hidden">

        <table class="min-w-full border-collapse text-left">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-4 py-2">Service Name</th>
                    <th class="px-4 py-2">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($services as $s): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2 font-medium"><?= $s['service_name'] ?></td>
                    <td class="px-4 py-2"><?= $s['description'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <a href="<?= url("/dashboard") ?>/courses" 
       class="inline-block mt-4 text-blue-600 hover:underline">
       ← Back to Courses
    </a>
</div>
