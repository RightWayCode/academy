<?php
$colleges = findMany("colleges");
?>

<div class="p-4 md:p-6">
    
    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 mb-5">
        <h1 class="text-2xl font-semibold">College Management</h1>
        <a href="<?= url('/dashboard') ?>/college/add"
           class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow hover:bg-blue-700 transition">
            + Add New College
        </a>
    </div>

    <!-- Table Wrapper (Responsive Scroll) -->
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full text-left border-collapse">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="px-4 py-3 whitespace-nowrap">#</th>
                        <th class="px-4 py-3 whitespace-nowrap">College Name</th>
                        <th class="px-4 py-3">Address</th>
                        <th class="px-4 py-3 whitespace-nowrap">Status</th>
                        <th class="px-4 py-3 text-right whitespace-nowrap">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if(empty($colleges)): ?>
                        <tr>
                            <td colspan="5" class="text-center py-6 text-gray-500">
                                No colleges found.
                            </td>
                        </tr>
                    <?php endif; ?>

                    <?php foreach($colleges as $c): ?>
                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="px-4 py-3 text-gray-700"><?= $c['college_id'] ?></td>

                        <td class="px-4 py-3 font-medium text-gray-900">
                            <?= htmlspecialchars($c['college_name']) ?>
                        </td>

                        <td class="px-4 py-3 text-gray-700 max-w-xs break-words">
                            <?= htmlspecialchars($c['address']) ?>
                        </td>

                        <td class="px-4 py-3">
                            <?php if($c['status']): ?>
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-sm">Active</span>
                            <?php else: ?>
                                <span class="bg-red-100 text-red-700 px-2 py-1 rounded text-sm">Inactive</span>
                            <?php endif; ?>
                        </td>

                        <td class="px-4 py-3">
                            <div class="flex gap-3 justify-end text-sm flex-wrap">

                                <a href="<?= url('/dashboard') ?>/<?= $c['college_id'] ?>/courses"
                                    class="text-blue-600 hover:underline">Courses</a>

                                <a href="<?= url('/dashboard') ?>/college/view?id=<?= $c['college_id'] ?>"
                                   class="text-blue-600 hover:underline">View</a>

                                <a href="<?= url('/dashboard') ?>/college/edit?id=<?= $c['college_id'] ?>"
                                   class="text-yellow-600 hover:underline">Edit</a>

                                <a href="<?= url('/dashboard') ?>/college/delete?id=<?= $c['college_id'] ?>"
                                   class="text-red-600 hover:underline"
                                   onclick="return confirm('Delete this college?')">
                                    Delete
                                </a>

                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
