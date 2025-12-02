<?php $url = URL."/dashboard" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - <?= isset($title) ? $title : '' ?></title>

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        .sidebar {
            transition: transform 0.3s ease-in-out;
        }
        .sidebar-hidden {
            transform: translateX(-100%);
        }
    </style>
</head>

<body class="bg-gray-100 overflow-x-hidden">

    <!-- Mobile Overlay -->
    <div id="overlay"
        class="fixed inset-0 bg-black bg-opacity-40 hidden z-40"
        onclick="toggleSidebar()">
    </div>

    <!-- Sidebar -->
    <aside id="sidebar"
        class="sidebar fixed inset-y-0 left-0 w-64 bg-white shadow-xl z-50 sidebar-hidden md:translate-x-0 md:sidebar md:block">

        <!-- Logo -->
        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold text-blue-600">Admin Panel</h1>
            <p class="text-sm text-gray-500">Management Dashboard</p>
        </div>

        <!-- Menu Items -->
        <nav class="p-4 space-y-2 overflow-y-auto h-[calc(100vh-120px)]">

            <!-- Dashboard -->
            <a href="<?= $url ?>/"
                class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="layout-dashboard" class="w-5"></i> Dashboard
            </a>

            <p class="section-title">Academics</p>

            <a href="<?= $url ?>/colleges" class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="school" class="w-5"></i> Colleges
            </a>

            <a href="<?= $url ?>/courses" class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="book-open" class="w-5"></i> Courses
            </a>

            <a href="<?= $url ?>/services" class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="settings" class="w-5"></i> Services
            </a>

            <a href="<?= $url ?>/products" class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="file-text" class="w-5"></i> Products
            </a>

            <p class="section-title">Orders & Customers</p>

            <a href="<?= $url ?>/customers" class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="users" class="w-5"></i> Customers
            </a>

            <!-- <a href="<?= $url ?>/orders" class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="shopping-cart" class="w-5"></i> Orders
            </a> -->

            <!-- <a href="<?= $url ?>/payments" class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="credit-card" class="w-5"></i> Payments
            </a> -->

            <p class="section-title">Content</p>

            <a href="<?= $url ?>/blog-category" class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="list" class="w-5"></i> Blog Categories
            </a>

            <a href="<?= $url ?>/blogs" class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="newspaper" class="w-5"></i> Blogs
            </a>

            <p class="section-title">Admin & Security</p>

            <a href="<?= $url ?>/admins" class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="shield" class="w-5"></i> Admins
            </a>

            <a href="<?= $url ?>/roles" class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="key" class="w-5"></i> Roles
            </a>

            <a href="<?= $url ?>/permissions" class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="lock" class="w-5"></i> Permissions
            </a>

            <a href="<?= $url ?>/activity-logs" class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="history" class="w-5"></i> Activity Logs
            </a>

            <p class="section-title">Support</p>

            <a href="<?= $url ?>/contacts" class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="message-circle" class="w-5"></i> Contact Messages
            </a>

            <a href="<?= $url ?>/settings" class="nav-link flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50">
                <i data-lucide="settings-2" class="w-5"></i> Site Settings
            </a>

        </nav>
    </aside>

    <!-- Main Content -->
    <div class="md:ml-64 min-h-screen flex flex-col">

        <!-- Top Navbar -->
        <header class="bg-white shadow flex items-center justify-between px-4 py-3 sticky top-0 z-30">

            <div class="flex items-center gap-3">

                <button class="md:hidden p-2 rounded hover:bg-gray-100" onclick="toggleSidebar()">
                    <i data-lucide="menu" class="w-6"></i>
                </button>

                <h2 class="text-xl font-semibold text-gray-700">
                    <?= isset($title) ? $title : 'Dashboard'?>
                </h2>
            </div>

            <div class="flex items-center gap-3">
                <span class="text-gray-600 text-sm">
                    <!-- {{ auth()->user()->name ?? 'Admin' }} -->
                    <?= isset($title) ? $title : 'Admin'?>
                </span>
                <img src="https://ui-avatars.com/api/?name=Admin"
                    class="w-9 h-9 rounded-full border">
            </div>
        </header>

        <!-- Main Page Content -->
        <main class="flex-1 overflow-y-auto p-6">
            <?php echo $content ?>
        </main>

    </div>

    <script>
        lucide.createIcons();

        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            const overlay = document.getElementById("overlay");

            sidebar.classList.toggle("sidebar-hidden");
            overlay.classList.toggle("hidden");
        }
    </script>

    <style>
        .nav-link {
            transition: .2s;
        }

        .nav-link:hover {
            background: #eff6ff;
            color: #1d4ed8;
        }

        .section-title {
            @apply text-xs uppercase font-bold mt-6 mb-2 text-gray-500 px-1;
        }
    </style>

</body>
</html>
