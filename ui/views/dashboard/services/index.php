<?php
$services = findMany("services");
?>


<div class="p-6">
    <div class="flex justify-between items-center mb-5">
        <h1 class="text-2xl font-semibold">Services</h1>

        <a href="<?= url("/dashboard") ?>/service/add"
            class="bg-blue-600 text-white px-4 py-2 rounded shadow hover:bg-blue-700">
            + Add Service
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">

        <table class="min-w-full border-collapse text-left">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-4 py-2">#</th>
                    <th class="px-4 py-2">Service Name</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2 text-right">Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($services)): ?>
                    <?php foreach ($services as $s): ?>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2"><?= $s['service_id'] ?></td>

                            <td class="px-4 py-2 font-medium"><?= $s['service_name'] ?></td>

                            <td class="px-4 py-2"><?= $s['description'] ?></td>

                            <td class="px-4 py-2">
                                <?= $s['status']
                                    ? '<span class="text-green-600 font-semibold">Active</span>'
                                    : '<span class="text-red-600 font-semibold">Inactive</span>' ?>
                            </td>

                            <td class="px-4 py-2 flex gap-3 justify-end">
                                <a href="<?= url("/dashboard/service/view") ?>?service_id=<?= $s['service_id'] ?>"
                                    class="text-blue-600 hover:underline">View</a>

                                <a href="<?= url("/dashboard/service/edit") ?>?id=<?= $s['service_id'] ?>"
                                    class="text-yellow-600 hover:underline">Edit</a>

                                <a href="<?= url("/dashboard/service/delete") ?>?id=<?= $s['service_id'] ?>"
                                    class="text-red-600 hover:underline"
                                    onclick="return confirm('Delete this service?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                <?php else: ?>
                    <tr>
                        <td colspan="7" class="text-center py-6 text-gray-500">
                            No services found.
                        </td>
                    </tr>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>