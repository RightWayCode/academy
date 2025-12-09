<?php validate();
$course      = $route_data['params']['course'] ?? $data['course'];
$semester    = $route_data['params']['semester'];
$medium      = $route_data['params']['medium'] ?? "english";
$slug        = $route_data['params']['products'];

$course_id   = findOne("courses", "slug=:slug", ["slug" => $course], ['course_id'])['course_id'];
$service_id  = findOne("services", "slug=:slug", ["slug" => "notes"], ['service_id'])['service_id'];

$products = findOne(
    "products",
    'course_id=:course_id AND service_id=:service_id AND semester=:semester AND medium=:medium AND slug=:slug',
    [
        "course_id" => $course_id,
        "service_id" => $service_id,
        "semester" => $semester,
        "medium" => $medium,
        "slug" => $slug,
    ]
);

if (!$products) {
    echo "<div class='max-w-3xl mx-auto p-10 text-center text-red-600 font-semibold'>Product not found!</div>";
    return;
}

?>
<!-- MAIN WRAPPER -->
<section class="max-w-6xl mx-auto p-4">

    <!-- Breadcrumb -->
    <nav class="text-sm text-gray-600 mb-4">
        <ol class="flex items-center space-x-1">

            <li>
                <a href="/service" class="hover:text-blue-600 transition">Service</a>
            </li>

            <li class="text-gray-400">/</li>

            <li>
                <a href="/notes" class="hover:text-blue-600 transition">Notes</a>
            </li>

            <li class="text-gray-400">/</li>

            <li class="text-gray-900 font-semibold">
                <?= ucfirst($products['product_name']) ?> (<?= ucfirst($products['medium']) ?> Medium)
            </li>

        </ol>
    </nav>

    <div class="max-w-6xl mx-auto pb-10 px-4">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

            <!-- LEFT CONTENT -->
            <div class="space-y-4">

                <!-- Title -->
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 leading-snug">
                    <?= ucfirst($products['product_name']) ?> in <?= ucfirst($products['medium']) ?> Medium
                </h1>

                <!-- Subtitle -->
                <p class="text-gray-600 text-[15px] leading-relaxed">
                    <?= strtoupper($products['course_id']) ?> DU SOL Semester <?= $products['semester'] ?>
                    <?= ucfirst($products['product_name']) ?> Notes in <?= ucfirst($products['medium']) ?> Medium
                </p>

                <!-- File Info -->
                <p class="text-sm text-gray-700">
                    <span class="font-semibold">Document Type:</span>
                    <?= strtoupper($products['type']) ?>
                </p>

                <!-- Price -->
                <div class="flex items-end gap-3">
                    <p class="text-2xl font-bold text-red-600">₹<?= $products['price'] ?></p>
                    <p class="text-gray-400 line-through text-lg">₹299.00</p>
                </div>

                <!-- PDF Badge -->
                <span class="inline-block bg-red-600 text-white text-xs font-semibold px-3 py-1 rounded">
                    <?= strtoupper($products['type']) ?>
                </span>

                <!-- Add to Cart -->
                <form action="?request=cart_add" method="post">
                    <input type="hidden" name="product_id" value="<?= $products['product_id'] ?>">
                    <button
                        class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2.5 rounded shadow-sm transition">
                        Add To Cart
                    </button>
                </form>

                <!-- Author -->
                <div class="flex items-center gap-3 pt-1">
                    <img src="<?= url('/assets/uploads/auther/default.jpg') ?>" class="w-9 h-9 rounded-full border"
                        alt="author">
                    <div>
                        <p class="text-sm font-medium">By Ashish Tiwari</p>
                        <p class="text-yellow-500 text-xs leading-tight">⭐⭐⭐⭐☆ (0)</p>
                    </div>
                </div>

            </div>

            <!-- RIGHT IMAGE -->
            <div class="w-full">
                <div class="bg-white rounded-lg shadow-sm p-3">
                    <?php
                    $img = $products['image'] ?? null;
                    $imgUrl = $img ? url('/assets/uploads/products/' . $img) :
                        "https://placehold.co/600x800?text=No+Image";
                    ?>
                    <img src="<?= $imgUrl ?>" alt="<?= $products['product_name'] ?>"
                        class="w-full rounded-md object-cover" />
                </div>
            </div>

        </div>

    </div>

    <!-- DESCRIPTION + WHAT'S INSIDE -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">

        <!-- LEFT -->
        <div class="md:col-span-2 space-y-10">

            <!-- DESCRIPTION -->
            <section>
                <h2 class="text-xl font-semibold text-gray-900 mb-3">Description</h2>

                <div class="bg-white shadow-sm rounded-lg p-5">
                    <p class="text-gray-700 text-[15px] leading-6 mb-4">
                        <?= $products['summary'] ?>
                    </p>

                    <h3 class="text-base font-semibold mb-2">✨ What you will get:</h3>

                    <ul class="list-disc pl-5 space-y-1.5 text-gray-700 text-[15px] leading-6">
                        <li>Exam-based important questions</li>
                        <li>Premium notes</li>
                        <li>Complete syllabus coverage</li>
                        <li>Instant PDF download</li>
                    </ul>
                </div>
            </section>

            <!-- FAQ -->
            <section>
                <h2 class="text-xl font-semibold text-gray-900 mb-3">FAQs</h2>

                <div class="space-y-3">

                    <details class="bg-white shadow-sm rounded-lg p-4">
                        <summary class="font-medium cursor-pointer">How to download the PDF?</summary>
                        <p class="mt-2 text-gray-700 text-[15px] leading-6">
                            After successful payment, you can download your PDF immediately.
                        </p>
                    </details>

                    <details class="bg-white shadow-sm rounded-lg p-4">
                        <summary class="font-medium cursor-pointer">Is this enough for exams?</summary>
                        <p class="mt-2 text-gray-700 text-[15px] leading-6">
                            Yes, the notes are exam-oriented and cover the entire syllabus.
                        </p>
                    </details>

                    <details class="bg-white shadow-sm rounded-lg p-4">
                        <summary class="font-medium cursor-pointer">What if I face any issue?</summary>
                        <p class="mt-2 text-gray-700 text-[15px] leading-6">
                            You get full support through email or WhatsApp anytime.
                        </p>
                    </details>

                </div>
            </section>

        </div>

        <!-- RIGHT SIDE: WHAT'S INSIDE -->
        <aside class="md:sticky md:top-24 h-max">

            <div class="bg-white p-5 rounded-lg shadow-sm">

                <h3 class="text-xl font-semibold mb-4">What's Inside</h3>

                <ul class="space-y-2.5 text-[15px] text-gray-800">
                    <li class="flex items-center justify-between">
                        Study Material PDF <span class="text-green-600 font-bold">✓</span>
                    </li>
                    <li class="flex items-center justify-between">
                        Question Bank <span class="text-green-600 font-bold">✓</span>
                    </li>
                    <li class="flex items-center justify-between">
                        Exam-Oriented Notes <span class="text-green-600 font-bold">✓</span>
                    </li>
                    <li class="flex items-center justify-between">
                        Instant Download <span class="text-green-600 font-bold">✓</span>
                    </li>
                    <li class="flex items-center justify-between">
                        24×7 Support <span class="text-green-600 font-bold">✓</span>
                    </li>
                </ul>

                <form action="?request=cart_add" method="post">
                    <input type="hidden" name="product_id" value="<?= $products['product_id'] ?>">
                    <button
                        class="w-full mt-5 py-2.5 bg-orange-500 text-white font-medium rounded hover:bg-orange-600 transition">
                        Add To Cart
                    </button>
                </form>

            </div>

        </aside>

    </div>

</section>
