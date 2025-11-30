<?php
// Dummy Data
$categories = [
    ["id" => 1, "name" => "Admissions", "status" => 1],
    ["id" => 2, "name" => "College Tips", "status" => 1],
    ["id" => 3, "name" => "Events", "status" => 0],
];
?>

<section class="p-6">
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl font-bold">Blog Categories</h1>
        <a href="<?= url("/dashboard") ?>/category/add" 
           class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
            + Add Category
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 text-left">ID</th>
                    <th class="px-4 py-3 text-left">Category Name</th>
                    <th class="px-4 py-3 text-left">Status</th>
                    <th class="px-4 py-3 text-right">Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($categories as $cat): ?>
                <tr class="border-b last:border-none">
                    <td class="px-4 py-3"><?= $cat['id'] ?></td>
                    <td class="px-4 py-3 font-medium"><?= $cat['name'] ?></td>
                    <td class="px-4 py-3">
                        <span class="px-3 py-1 rounded-full text-sm 
                            <?= $cat['status'] ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' ?>">
                            <?= $cat['status'] ? 'Active' : 'Inactive' ?>
                        </span>
                    </td>
                    <td class="px-4 py-3 text-right space-x-2">
                        <a href="<?= url("/dashboard") ?>/category/edit" class="text-blue-600 hover:underline">Edit</a>
                        <a href="<?= url("/dashboard") ?>/category/delete" class="text-red-600 hover:underline">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</section>
