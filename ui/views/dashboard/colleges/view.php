<?php
// Dummy college
$college_name = "Delhi Institute of Technology";

// Dummy courses
$courses = [
    ['course_name' => 'B.Tech Computer Science', 'duration_years' => 4, 'semesters' => 8],
    ['course_name' => 'BCA', 'duration_years' => 3, 'semesters' => 6],
];
?>

<div class="p-6">
    <h1 class="text-2xl font-semibold mb-4">Courses at <?= $college_name ?></h1>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full text-left border-collapse">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-4 py-2">Course Name</th>
                    <th class="px-4 py-2">Duration</th>
                    <th class="px-4 py-2">Semesters</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($courses as $c): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2"><?= $c['course_name'] ?></td>
                    <td class="px-4 py-2"><?= $c['duration_years'] ?> years</td>
                    <td class="px-4 py-2"><?= $c['semesters'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <a href="<?= url("/dashboard") ?>/colleges" 
       class="inline-block mt-4 text-blue-600 hover:underline">
       ← Back to College List
    </a>
</div>
