<!-- Orders List -->
<div class="p-6">
    <h1 class="text-2xl font-semibold mb-4">Orders</h1>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 border">Order ID</th>
                    <th class="p-3 border">Customer</th>
                    <th class="p-3 border">Total</th>
                    <th class="p-3 border">Status</th>
                    <th class="p-3 border">Date</th>
                    <th class="p-3 border text-center">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ([1,2,3] as $order): ?>
                <tr class="hover:bg-gray-50">
                    <td class="p-3 border">#<?= $order ?></td>
                    <td class="p-3 border">Vishal Kumar</td>
                    <td class="p-3 border">₹499.00</td>
                    <td class="p-3 border">
                        <span class="px-3 py-1 rounded bg-green-100 text-green-700 text-sm">Paid</span>
                    </td>
                    <td class="p-3 border">2025-11-30</td>
                    <td class="p-3 border text-center">
                        <a href="<?= url("/dashboard") ?>/order/details?id=<?= $order ?>" 
                           class="px-4 py-1 bg-blue-600 text-white rounded hover:bg-blue-700">
                           View
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
