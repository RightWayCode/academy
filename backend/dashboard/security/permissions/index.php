<div class="p-6">

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Permissions</h1>
        <a href="<?= url("/dashboard") ?>/permission/add" class="px-4 py-2 bg-blue-600 text-white rounded-md">Add Permission</a>
    </div>

    <?php
    $permissions = [
        ["id"=>1,"key"=>"manage_admins","label"=>"Manage Admin Users"],
        ["id"=>2,"key"=>"delete_orders","label"=>"Delete Orders"],
        ["id"=>3,"key"=>"manage_products","label"=>"Manage Products"],
    ];
    ?>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3">#</th>
                    <th class="p-3">Permission Key</th>
                    <th class="p-3">Label</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($permissions as $p): ?>
                <tr class="border-b">
                    <td class="p-3"><?= $p['id'] ?></td>
                    <td class="p-3"><?= $p['key'] ?></td>
                    <td class="p-3"><?= $p['label'] ?></td>
                    <td class="p-3 flex gap-2">
                        <a href="<?= url("/dashboard") ?>/permission/edit?id=<?= $p['id'] ?>" class="text-blue-600">Edit</a>
                        <a href="#" class="text-red-600">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>