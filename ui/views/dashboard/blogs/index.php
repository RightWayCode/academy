<?php 
$blogs = [
    ["id"=>1, "title"=>"How to Apply for BCA Admission", "category"=>"Admissions", "status"=>1],
    ["id"=>2, "title"=>"Top 10 Tips for College Freshers", "category"=>"College Tips", "status"=>1],
    ["id"=>3, "title"=>"Upcoming Cultural Fest 2025", "category"=>"Events", "status"=>0],
];
?>

<section class="p-6">
    <div class="flex items-center justify-between mb-5">
        <h1 class="text-2xl font-bold">Blogs</h1>
        <a href="<?= url("/dashboard") ?>/blog/add" 
           class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
            + Add Blog
        </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full border-collapse">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 text-left">ID</th>
                    <th class="px-4 py-3 text-left">Title</th>
                    <th class="px-4 py-3 text-left">Category</th>
                    <th class="px-4 py-3 text-left">Status</th>
                    <th class="px-4 py-3 text-right">Actions</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($blogs as $b): ?>
                <tr class="border-b last:border-none">
                    <td class="px-4 py-3"><?= $b['id'] ?></td>
                    <td class="px-4 py-3 font-semibold"><?= $b['title'] ?></td>
                    <td class="px-4 py-3"><?= $b['category'] ?></td>
                    <td class="px-4 py-3">
                        <span class="px-3 py-1 rounded-full text-sm 
                             <?= $b['status'] ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' ?>">
                            <?= $b['status'] ? "Active" : "Inactive" ?>
                        </span>
                    </td>
                    <td class="px-4 py-3 text-right space-x-2">
                        <a href="<?= url("/dashboard") ?>/blog/view?id=<?= $b['id'] ?>" class="text-blue-600 hover:underline">View</a>
                        <a href="<?= url("/dashboard") ?>/blog/edit?id=<?= $b['id'] ?>" class="text-yellow-600 hover:underline">Edit</a>
                        <a href="#" class="text-red-600 hover:underline">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</section>
