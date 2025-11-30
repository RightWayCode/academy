<?php
$blog = [
    "title" => "How to Apply for BCA Admission",
    "category" => "Admissions",
    "author" => "Admin",
    "content" => "This is sample blog content about how to apply for BCA admission...",
    "created" => "2025-02-10"
];
?>

<section class="p-6 max-w-4xl mx-auto">

    <div class="bg-white shadow rounded-lg p-6">
        <h1 class="text-3xl font-bold mb-3"><?= $blog['title'] ?></h1>

        <p class="text-gray-500 text-sm mb-4">
            Category: <span class="font-medium"><?= $blog['category'] ?></span> • 
            Author: <?= $blog['author'] ?> • 
            Posted on <?= $blog['created'] ?>
        </p>

        <div class="prose max-w-none">
            <?= nl2br($blog['content']) ?>
        </div>

        <div class="mt-5">
            <a href="<?= url("/dashboard") ?>/blogs" class="text-indigo-600 hover:underline">← Back to Blogs</a>
        </div>
    </div>

</section>
