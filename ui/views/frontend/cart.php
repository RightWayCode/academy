<?php validate();

// READ CART COOKIE
$cartItems = isset($_COOKIE['cart_items']) ? json_decode($_COOKIE['cart_items'], true) : [];
if (!is_array($cartItems) || count($cartItems) === 0) {
    echo "<div class='max-w-3xl mx-auto p-10 text-center text-gray-600 text-lg'>Your cart is empty!</div>";
    return;
}

// Fetch all products in cart
$placeholders = implode(',', array_fill(0, count($cartItems), '?'));

$cartProducts = findMany("products", "product_id IN ($placeholders)", $cartItems);

// Calculate total
$totalAmount = 0;
foreach ($cartProducts as $p) {
    $totalAmount += $p['price'];
}

?>
<section class="max-w-6xl mx-auto p-4 py-10">

    <h1 class="text-3xl font-bold mb-6">Your Cart</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

        <!-- CART LIST -->
        <div class="md:col-span-2 space-y-5">

            <?php foreach ($cartProducts as $product): ?>
                <div class="flex items-center justify-between bg-white shadow-sm p-4 rounded-lg">

                    <div class="flex items-center gap-4">

                        <!-- Image -->
                        <?php
                        $img = $product['image'] ?? null;
                        $imgUrl = $img ? url('/assets/uploads/products/' . $img) :
                            "https://placehold.co/80x80";
                        ?>
                        <img src="<?= $imgUrl ?>" class="w-20 h-20 rounded object-cover" />

                        <div>
                            <p class="font-semibold text-gray-800 text-lg">
                                <?= ucfirst($product['product_name']) ?>
                            </p>
                            <p class="text-gray-600 text-sm">Medium: <?= ucfirst($product['medium']) ?></p>
                            <p class="font-bold text-red-600 mt-1">₹<?= $product['price'] ?></p>
                        </div>

                    </div>

                    <!-- Remove -->
                    <form method="post" action="?request=remove&product_id=<?= $product['product_id'] ?>">
                        <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
                        <button class="text-red-600 hover:underline text-sm font-medium">
                            Remove
                        </button>
                    </form>

                </div>
            <?php endforeach; ?>

        </div>

        <!-- SUMMARY + CHECKOUT FORM -->
        <div class="bg-white p-5 rounded-lg shadow-sm">

            <h2 class="text-xl font-semibold mb-4">Order Summary</h2>

            <div class="space-y-2 mb-4">
                <?php foreach ($cartProducts as $p): ?>
                    <div class="flex justify-between text-sm">
                        <span><?= ucfirst($p['product_name']) ?></span>
                        <span>₹<?= $p['price'] ?></span>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="flex justify-between font-bold text-lg border-t pt-3 mb-6">
                <span>Total</span>
                <span>₹<?= $totalAmount ?></span>
            </div>

            <h3 class="text-lg font-semibold mb-3">Checkout Details</h3>

            <form action="/checkout/process" method="post" class="space-y-4">

                <!-- Product IDs as array -->
                <?php foreach ($cartItems as $pid): ?>
                    <input type="hidden" name="product_ids[]" value="<?= $pid ?>">
                <?php endforeach; ?>

                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                    <input type="text" name="name" required
                        class="w-full border rounded px-3 py-2 text-sm focus:ring focus:border-blue-400" required>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Address *</label>
                    <input type="email" name="email" required
                        class="w-full border rounded px-3 py-2 text-sm focus:ring focus:border-blue-400" required>
                </div>

                <!-- Phone -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number *</label>
                    <input type="text" name="phone" required
                        class="w-full border rounded px-3 py-2 text-sm focus:ring focus:border-blue-400" required>
                </div>
                <!-- Additional summery -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Summery (Optional)</label>
                    <textarea name="remarks" rows="3"
                        class="w-full border rounded px-3 py-2 text-sm focus:ring focus:border-blue-400"></textarea>
                </div>

                <!-- Hidden total -->
                <input type="hidden" name="total_amount" value="<?= $totalAmount ?>">

                <button
                    class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2.5 rounded-lg mt-2">
                    Proceed to Payment
                </button>

            </form>

        </div>

    </div>

</section>