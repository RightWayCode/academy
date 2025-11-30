<div class="p-6">

    <h1 class="text-2xl font-bold mb-6">Admin Activity Logs</h1>

    <?php
    $logs = [
        ["id"=>1,"admin"=>"Vishal","action"=>"Created product","ip"=>"192.168.1.10","ua"=>"Chrome"],
        ["id"=>2,"admin"=>"Rohit","action"=>"Deleted order #23","ip"=>"192.168.1.12","ua"=>"Firefox"],
        ["id"=>3,"admin"=>"Ankit","action"=>"Updated blog","ip"=>"192.168.1.20","ua"=>"Chrome"],
    ];
    ?>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3">#</th>
                    <th class="p-3">Admin</th>
                    <th class="p-3">Action</th>
                    <th class="p-3">IP</th>
                    <th class="p-3">Browser</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($logs as $l): ?>
                <tr class="border-b">
                    <td class="p-3"><?= $l['id'] ?></td>
                    <td class="p-3"><?= $l['admin'] ?></td>
                    <td class="p-3"><?= $l['action'] ?></td>
                    <td class="p-3"><?= $l['ip'] ?></td>
                    <td class="p-3"><?= $l['ua'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>