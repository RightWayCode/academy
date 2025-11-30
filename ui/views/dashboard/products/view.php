<?php
// Dummy product
$p = ['product_id'=>2,'product_name'=>'Sem 2 Video Lectures','semester'=>'2','type'=>'Video','price'=>399.00,'download_limit'=>2,'download_expiry_days'=>60,'status'=>1,'file_path'=>'/files/sem2.mp4','summary'=>'Lectures for sem 2','created_at'=>'2025-11-30 10:00:00'];
?>
<div class="p-6 max-w-3xl mx-auto">
    <div class="flex items-start justify-between mb-5">
        <div>
            <h1 class="text-2xl font-semibold"><?= htmlspecialchars($p['product_name']) ?></h1>
            <p class="text-sm text-gray-500"><?= htmlspecialchars($p['summary']) ?></p>
            <div class="mt-2 text-xs text-gray-600">Created: <?= $p['created_at'] ?></div>
        </div>

        <div class="text-right">
            <div class="text-lg font-semibold">₹<?= number_format($p['price'],2) ?></div>
            <div class="text-sm text-gray-600"><?= $p['type'] ?> · Semester: <?= htmlspecialchars($p['semester']) ?></div>
            <div class="mt-3 flex gap-2">
                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Download</a>
                <a href="product-edit.php?id=<?= $p['product_id'] ?>" class="px-4 py-2 rounded border">Edit</a>
            </div>
        </div>
    </div>

    <div class="bg-white shadow rounded-lg p-4">
        <h2 class="font-semibold mb-2">Details</h2>
        <div class="grid grid-cols-2 gap-4 text-sm">
            <div><strong>Download Limit:</strong> <?= $p['download_limit'] ?></div>
            <div><strong>Expiry:</strong> <?= $p['download_expiry_days'] ?> days</div>
            <div><strong>File Path:</strong> <?= htmlspecialchars($p['file_path']) ?></div>
            <div><strong>Status:</strong> <?= $p['status'] ? 'Active' : 'Inactive' ?></div>
        </div>

        <div class="mt-4">
            <h3 class="font-semibold">Preview / Notes</h3>
            <p class="text-sm text-gray-700 mt-2">(If PDF, show embed/thumbnail in real app. If video, show player.)</p>
        </div>
    </div>

    <a href="<?= url("/dashboard") ?>/products" class="inline-block mt-4 text-blue-600 hover:underline">← Back to Products</a>
</div>
