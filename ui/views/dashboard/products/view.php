<?php
// =========================
// FETCH PRODUCT FROM DATABASE
// =========================

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid Product ID");
}

$product_id = $_GET['id'];

// Fetch product
$p = findOne("products", "product_id=:id", ["id" => $product_id]);

if (!$p) {
    die("Product not found!");
}

// Fetch service
$service = findOne("services", "service_id=:sid", ["sid" => $p['service_id']]);
$service_name = $service ? $service['service_name'] : "Unknown Service";

?>

<div class="p-6 max-w-3xl mx-auto">

    <!-- HEADER SECTION -->
    <div class="flex items-start justify-between mb-5">
        <div>
            <h1 class="text-2xl font-semibold">
                <?= htmlspecialchars($p['product_name']) ?>
            </h1>

            <p class="text-sm text-gray-500">
                <?= htmlspecialchars($p['summary']) ?>
            </p>

            <div class="mt-2 text-xs text-gray-600">
                Created: <?= $p['created_at'] ?>
            </div>

            <div class="mt-1 text-xs text-gray-600">
                Service:
                <strong><?= htmlspecialchars($service_name) ?></strong>
            </div>
        </div>

        <div class="text-right">
            <div class="text-lg font-semibold">
                ₹<?= number_format($p['price'], 2) ?>
            </div>

            <div class="text-sm text-gray-600">
                <?= htmlspecialchars($p['type']) ?> • Semester <?= htmlspecialchars($p['semester']) ?>
            </div>

            <div class="mt-3 flex gap-2">
                <?php if (!empty($p['file_path'])): ?>
                    <a href="<?= htmlspecialchars($p['file_path']) ?>"
                        download
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Download
                    </a>
                <?php endif; ?>

                <a href="<?= url("/dashboard/product/edit?id=" . $p['product_id']) ?>"
                    class="px-4 py-2 rounded border hover:bg-gray-100">
                    Edit
                </a>
            </div>
        </div>
    </div>


    <!-- DETAILS CARD -->
    <div class="bg-white shadow rounded-lg p-4">
        <h2 class="font-semibold mb-2">Details</h2>

        <div class="grid grid-cols-2 gap-4 text-sm">
            <div><strong>Download Limit:</strong> <?= $p['download_limit'] ?></div>
            <div><strong>Expiry:</strong> <?= $p['download_expiry_days'] ?> days</div>
            <div><strong>Status:</strong> <?= $p['status'] ? 'Active' : 'Inactive' ?></div>
            <div><strong>Service ID:</strong> <?= $p['service_id'] ?></div>
            <div><strong>Semester:</strong> <?= htmlspecialchars($p['semester']) ?></div>
            <div><strong>File Path:</strong> <span class="text-wrap"><?= htmlspecialchars($p['file_path'] ?: "NULL") ?></span></div>
        </div>

        <!-- PREVIEW SECTION -->
        <div class="mt-4">
            <h3 class="font-semibold">Preview / Notes</h3>

            <?php if ($p['type'] === 'PDF' && !empty($p['file_path'])): ?>
                <iframe src="<?= htmlspecialchars($p['file_path']) ?>"
                        class="w-full h-80 mt-3 border rounded"
                        frameborder="0"></iframe>

            <?php elseif ($p['type'] === 'Video' && !empty($p['file_path'])): ?>
                <video class="w-full mt-3 rounded shadow" controls>
                    <source src="<?= htmlspecialchars($p['file_path']) ?>" type="video/mp4">
                </video>

            <?php else: ?>
                <p class="text-sm text-gray-700 mt-2">
                    No preview available for this file type.
                </p>
            <?php endif; ?>
        </div>
    </div>


    <a href="<?= url("/dashboard/products") ?>"
        class="inline-block mt-4 text-blue-600 hover:underline">
        ← Back to Products
    </a>
</div>
