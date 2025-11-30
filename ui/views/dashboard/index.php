<?php $url = URL."/dashboard" ?>
<div class="p-6">

    <!-- PAGE HEADER -->
    <div class="mb-6">
        <h1 class="text-3xl font-semibold text-gray-800">Dashboard</h1>
        <p class="text-gray-500 text-sm">Welcome back, Admin 👋</p>
    </div>

    <!-- TOP STATS -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">

        <!-- Total Orders -->
        <div class="p-5 bg-white rounded-xl shadow-sm border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Orders</p>
                <h3 class="text-2xl font-bold text-gray-800">1,245</h3>
            </div>
            <div class="p-3 bg-blue-100 text-blue-600 rounded-lg">
                📦
            </div>
        </div>

        <!-- Revenue -->
        <div class="p-5 bg-white rounded-xl shadow-sm border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Revenue</p>
                <h3 class="text-2xl font-bold text-gray-800">₹ 4,52,300</h3>
            </div>
            <div class="p-3 bg-green-100 text-green-600 rounded-lg">
                💰
            </div>
        </div>

        <!-- Customers -->
        <div class="p-5 bg-white rounded-xl shadow-sm border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Customers</p>
                <h3 class="text-2xl font-bold text-gray-800">890</h3>
            </div>
            <div class="p-3 bg-purple-100 text-purple-600 rounded-lg">
                👤
            </div>
        </div>

        <!-- Products -->
        <div class="p-5 bg-white rounded-xl shadow-sm border border-gray-100 flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Products</p>
                <h3 class="text-2xl font-bold text-gray-800">320</h3>
            </div>
            <div class="p-3 bg-yellow-100 text-yellow-600 rounded-lg">
                📚
            </div>
        </div>
    </div>

    <!-- CHART + QUICK ACTIONS -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">

        <!-- Revenue Chart Placeholder -->
        <div class="bg-white shadow-sm border border-gray-100 rounded-xl p-5 lg:col-span-2">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Revenue Overview</h3>
            <div class="h-64 flex items-center justify-center text-gray-400">
                📊 Chart Placeholder
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white shadow-sm border border-gray-100 rounded-xl p-5">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Quick Actions</h3>

            <div class="space-y-3">

                <a href="<?= url("/dashboard") ?>/products/add" class="block px-4 py-3 bg-blue-600 text-white rounded-lg text-sm font-medium hover:bg-blue-700">
                    ➕ Add New Product
                </a>

                <a href="<?= url("/dashboard") ?>/orders" class="block px-4 py-3 bg-gray-100 rounded-lg text-sm font-medium hover:bg-gray-200">
                    🧾 View Orders
                </a>

                <a href="<?= url("/dashboard") ?>/customers" class="block px-4 py-3 bg-gray-100 rounded-lg text-sm font-medium hover:bg-gray-200">
                    👥 All Customers
                </a>

                <a href="<?= url("/dashboard") ?>/blog/add" class="block px-4 py-3 bg-gray-100 rounded-lg text-sm font-medium hover:bg-gray-200">
                    ✍ Create Blog
                </a>

            </div>
        </div>
    </div>

    <!-- LATEST TABLES -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        <!-- Latest Orders -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Latest Orders</h3>

            <table class="w-full text-sm">
                <thead>
                    <tr class="text-left text-gray-500 border-b">
                        <th class="py-2">Order ID</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="border-b">
                        <td class="py-2 font-medium">#1023</td>
                        <td>Rahul Sharma</td>
                        <td>₹1200</td>
                        <td><span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">Paid</span></td>
                    </tr>

                    <tr class="border-b">
                        <td class="py-2 font-medium">#1024</td>
                        <td>Anjali Verma</td>
                        <td>₹450</td>
                        <td><span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs">Pending</span></td>
                    </tr>

                    <tr>
                        <td class="py-2 font-medium">#1025</td>
                        <td>Saurabh Singh</td>
                        <td>₹999</td>
                        <td><span class="px-2 py-1 bg-red-100 text-red-700 rounded text-xs">Failed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Latest Customers -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">New Customers</h3>

            <table class="w-full text-sm">
                <thead>
                    <tr class="text-left text-gray-500 border-b">
                        <th class="py-2">Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="border-b">
                        <td class="py-2 font-medium">Nikhil Kumar</td>
                        <td>nikhil@example.com</td>
                        <td>9876543210</td>
                    </tr>

                    <tr class="border-b">
                        <td class="py-2 font-medium">Pooja Deshmukh</td>
                        <td>pooja@example.com</td>
                        <td>9123456780</td>
                    </tr>

                    <tr>
                        <td class="py-2 font-medium">Ritesh Mehta</td>
                        <td>ritesh@example.com</td>
                        <td>9988776655</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</div>
