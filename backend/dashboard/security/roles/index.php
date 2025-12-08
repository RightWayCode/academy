<div class="p-6">

    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Roles</h1>
        <a href="<?= url("/dashboard") ?>/role/add" class="px-4 py-2 bg-blue-600 text-white rounded-md">Add Role</a>
    </div>

    <?php 
    // Dummy roles
    $roles = [
        ["id"=>1, "name"=>"Super Admin", "status"=>"active"],
        ["id"=>2, "name"=>"Manager", "status"=>"active"],
        ["id"=>3, "name"=>"Editor", "status"=>"inactive"],
    ];
    ?>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3">#</th>
                    <th class="p-3">Role Name</th>
                    <th class="p-3">Status</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($roles as $r): ?>
                <tr class="border-b">
                    <td class="p-3"><?= $r['id'] ?></td>
                    <td class="p-3"><?= $r['name'] ?></td>
                    <td class="p-3">
                        <span class="px-2 py-1 rounded text-sm 
                            <?= $r['status']=='active'?'bg-green-100 text-green-700':'bg-red-100 text-red-700' ?>">
                            <?= ucfirst($r['status']) ?>
                        </span>
                    </td>
                    <td class="p-3 flex gap-2">
                        <a href="<?= url("/dashboard") ?>/role/edit?id=<?= $r['id'] ?>" class="text-blue-600">Edit</a>
                        <a href="#" class="text-red-600">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>