<?php
$college_id = $_GET['id'] ?? 0;

// Fetch college details
$college = findOne("college", "college_id = :id", ['id' => $college_id]);

if (!$college) {
    die("College not found.");
}

// Fetch total courses count
$total_courses = countRows(
    "courses",
    "college_id = :id",
    ['id' => $college_id]
);
// hole($total_courses);

?>

<div class="p-4 md:p-6">

    <!-- Page Title -->
    <h1 class="text-2xl font-semibold mb-6">College Details</h1>

    <!-- College Card -->
    <div class="bg-white shadow rounded-xl p-6 space-y-5">

        <!-- Name -->
        <div>
            <h2 class="text-xl font-bold text-gray-800">
                <?= htmlspecialchars($college['college_name']) ?>
            </h2>
            <p class="text-gray-500 text-sm">College ID: <?= $college['college_id'] ?></p>
        </div>

        <!-- Info Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <!-- Address -->
            <div class="p-4 border rounded-lg bg-gray-50">
                <h3 class="text-sm text-gray-500 uppercase">Address</h3>
                <p class="mt-1 text-gray-800">
                    <?= nl2br(htmlspecialchars($college['address'])) ?>
                </p>
            </div>

            <!-- Status -->
            <div class="p-4 border rounded-lg bg-gray-50">
                <h3 class="text-sm text-gray-500 uppercase">Status</h3>
                <p class="mt-1">
                    <?php if ($college['status']): ?>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">Active</span>
                    <?php else: ?>
                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">Inactive</span>
                    <?php endif; ?>
                </p>
            </div>

            <!-- Total Courses -->
            <div class="p-4 border rounded-lg bg-gray-50">
                <h3 class="text-sm text-gray-500 uppercase">Total Courses</h3>
                <p class="mt-1 text-xl font-semibold text-gray-800">
                    <?= $total_courses ?>
                </p>
            </div>

            <!-- Created At -->
            <div class="p-4 border rounded-lg bg-gray-50">
                <h3 class="text-sm text-gray-500 uppercase">Created At</h3>
                <p class="mt-1 text-gray-800">
                    <?= $college['created_at'] ?>
                </p>
            </div>

        </div>

        <!-- Action buttons -->
        <div class="flex flex-wrap gap-3 mt-4">

            <a href="<?= url('/dashboard') ?>/college/edit?id=<?= $college['college_id'] ?>"
                class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition">
                Edit College
            </a>

            <a href="<?= url('/dashboard') ?>/<?= $college['college_id'] ?>/courses"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                Manage Courses
            </a>

        </div>

    </div>

    <a href="<?= url('/dashboard') ?>/colleges" class="inline-block mt-6 text-blue-600 hover:underline">
        ← Back to College List
    </a>

</div>