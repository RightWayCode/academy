<?php
// Dummy Data
$colleges = [
    ['college_id' => 1, 'college_name' => 'Delhi Institute of Technology', 'address' => 'New Delhi', 'status' => 1],
    ['college_id' => 2, 'college_name' => 'Mumbai College of Engineering', 'address' => 'Mumbai', 'status' => 1],
    ['college_id' => 3, 'college_name' => 'Chennai Science University', 'address' => 'Chennai', 'status' => 0],
];
?>

<div class="p-6">
    <div class="flex justify-between items-center mb-5">
        <h1 class="text-2xl font-semibold">College Management</h1>
        <a href="<?= url("/dashboard") ?>/college/add" 
           class="bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700">
            + Add New College
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full text-left border-collapse">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">College Name</th>
                    <th class="px-4 py-2">Address</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($colleges as $c): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2"><?= $c['college_id'] ?></td>
                    <td class="px-4 py-2 font-medium"><?= $c['college_name'] ?></td>
                    <td class="px-4 py-2"><?= $c['address'] ?></td>
                    <td class="px-4 py-2">
                        <?php if($c['status']): ?>
                            <span class="text-green-600 font-semibold">Active</span>
                        <?php else: ?>
                            <span class="text-red-600 font-semibold">Inactive</span>
                        <?php endif; ?>
                    </td>
                    <td class="px-4 py-2 flex gap-3 justify-end">
                        <a href="<?= url("/dashboard") ?>/college/view?id=<?= $c['college_id'] ?>" 
                           class="text-blue-600 hover:underline">View</a>

                        <a href="<?= url("/dashboard") ?>/college/edit?id=<?= $c['college_id'] ?>" 
                           class="text-yellow-600 hover:underline">Edit</a>

                        <a href="<?= url("/dashboard") ?>/college/delete?id=<?= $c['college_id'] ?>" 
                           class="text-red-600 hover:underline"
                           onclick="return confirm('Delete this college?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
