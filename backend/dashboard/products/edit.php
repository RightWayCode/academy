<?php
// Dummy existing product (would be fetched by ID)
$product = [
    'product_id'=>1,'product_name'=>'Sem 1 Notes','semester'=>'1','type'=>'PDF','price'=>199.00,'download_limit'=>3,'download_expiry_days'=>30,'status'=>1,'summary'=>'Intro basics','file_path'=>'/files/sem1.pdf'
];
?>
<div class="p-6 max-w-3xl mx-auto">
    <h1 class="text-2xl font-semibold mb-5">Edit Product — <?= htmlspecialchars($product['product_name']) ?></h1>

    <form action="#" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow space-y-4">
        <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">

        <div>
            <label class="block font-medium mb-1">Product Name</label>
            <input type="text" name="product_name" value="<?= htmlspecialchars($product['product_name']) ?>" required class="w-full px-3 py-2 border rounded">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block font-medium mb-1">Type</label>
                <select name="type" class="w-full border px-3 py-2 rounded">
                    <?php foreach(['PDF','Video','admission','Other'] as $t): ?>
                    <option value="<?= $t ?>" <?= $product['type']==$t ? 'selected' : '' ?>><?= $t ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div>
                <label class="block font-medium mb-1">Semester</label>
                <input type="text" name="semester" value="<?= htmlspecialchars($product['semester']) ?>" class="w-full px-3 py-2 border rounded">
            </div>
        </div>

        <div class="grid grid-cols-3 gap-4">
            <div>
                <label class="block font-medium mb-1">Price (₹)</label>
                <input type="number" step="0.01" name="price" class="w-full px-3 py-2 border rounded" value="<?= number_format($product['price'],2,'.','') ?>">
            </div>
            <div>
                <label class="block font-medium mb-1">Download Limit</label>
                <input type="number" name="download_limit" class="w-full px-3 py-2 border rounded" value="<?= $product['download_limit'] ?>">
            </div>
            <div>
                <label class="block font-medium mb-1">Expiry (days)</label>
                <input type="number" name="download_expiry_days" class="w-full px-3 py-2 border rounded" value="<?= $product['download_expiry_days'] ?>">
            </div>
        </div>

        <div>
            <label class="block font-medium mb-1">Summary</label>
            <input type="text" name="summary" class="w-full px-3 py-2 border rounded" value="<?= htmlspecialchars($product['summary']) ?>">
        </div>

        <div>
            <label class="block font-medium mb-1">Replace File</label>
            <?php if(!empty($product['file_path'])): ?>
                <div class="mb-2 text-sm text-gray-600">Current: <?= htmlspecialchars($product['file_path']) ?></div>
            <?php endif; ?>
            <input type="file" name="product_file" accept=".pdf,video/*,application/*" class="w-full">
            <p class="text-xs text-gray-500 mt-1">Leave empty to keep current file.</p>
        </div>

        <div>
            <label class="block font-medium mb-1">Status</label>
            <select name="status" class="w-full border px-3 py-2 rounded">
                <option value="1" <?= $product['status'] ? 'selected' : '' ?>>Active</option>
                <option value="0" <?= !$product['status'] ? 'selected' : '' ?>>Inactive</option>
            </select>
        </div>

        <div class="flex gap-3">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Update Product</button>
            <a href="product-list.php" class="px-4 py-2 rounded border">Cancel</a>
        </div>
    </form>
</div>
