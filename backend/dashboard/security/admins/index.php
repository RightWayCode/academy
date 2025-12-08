<div class="p-6">

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Admins</h1>
        <a href="<?= url("/dashboard") ?>/admin/add" class="px-4 py-2 bg-blue-600 text-white rounded-md">Add Admin</a>
    </div>

    <?php
    $admins = [
        ["id"=>1,"name"=>"Vishal","email"=>"vishal@example.com","role"=>"Super Admin","status"=>"active"],
        ["id"=>2,"name"=>"Rohit","email"=>"rohit@example.com","role"=>"Manager","status"=>"inactive"],
        ["id"=>3,"name"=>"Ankit","email"=>"ankit@example.com","role"=>"Editor","status"=>"active"],
    ];
    ?>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3">#</th>
                    <th class="p-3">Name</th>
                    <th class="p-3">Email</th>
                    <th class="p-3">Role</th>
                    <th class="p-3">Status</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($admins as $a): ?>
                <tr class="border-b">
                    <td class="p-3"><?= $a['id'] ?></td>
                    <td class="p-3 font-semibold"><?= $a['name'] ?></td>
                    <td class="p-3"><?= $a['email'] ?></td>
                    <td class="p-3"><?= $a['role'] ?></td>
                    <td class="p-3">
                        <span class="px-2 py-1 text-sm rounded 
                            <?= $a['status']=='active'?'bg-green-100 text-green-700':'bg-red-100 text-red-700' ?>">
                            <?= ucfirst($a['status']) ?>
                        </span>
                    </td>
                    <td class="p-3 flex gap-2">
                        <a href="<?= url("/dashboard") ?>/admin/edit?id=<?= $a['id'] ?>" class="text-blue-600">Edit</a>
                        <a href="#" class="text-red-600">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>