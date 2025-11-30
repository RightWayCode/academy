
<div class="p-6 max-w-5xl mx-auto">

    <h1 class="text-2xl font-bold mb-6">Site Settings</h1>

    <?php 
    // Dummy settings values
    $settings = [
        "site_name" => "My Education Store",
        "tagline" => "Best Notes | Courses | PDFs",
        "email" => "support@example.com",
        "phone" => "+91 9876543210",
        "address" => "Delhi, India",
        "logo" => "assets/logo.png",
        "favicon" => "assets/favicon.png",
        "seo_title" => "Educational Store - Courses, PDFs, Notes",
        "seo_description" => "Best study materials for all colleges and courses.",
        "facebook" => "https://facebook.com/example",
        "instagram" => "https://instagram.com/example",
        "twitter" => "https://twitter.com/example",
        "maintenance" => 0,
    ];
    ?>

    <form class="space-y-8 bg-white p-6 rounded-lg shadow">

        <!-- General Settings -->
        <div>
            <h2 class="text-xl font-semibold mb-4 border-b pb-2">General Settings</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="font-medium">Site Name</label>
                    <input type="text" value="<?= $settings['site_name'] ?>"
                        class="w-full mt-1 p-2 border rounded" />
                </div>

                <div>
                    <label class="font-medium">Tagline</label>
                    <input type="text" value="<?= $settings['tagline'] ?>"
                        class="w-full mt-1 p-2 border rounded" />
                </div>
            </div>
        </div>

        <!-- Contact Info -->
        <div>
            <h2 class="text-xl font-semibold mb-4 border-b pb-2">Contact & Branding</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="font-medium">Email</label>
                    <input type="email" value="<?= $settings['email'] ?>"
                        class="w-full mt-1 p-2 border rounded" />
                </div>

                <div>
                    <label class="font-medium">Phone</label>
                    <input type="text" value="<?= $settings['phone'] ?>"
                        class="w-full mt-1 p-2 border rounded" />
                </div>

                <div class="md:col-span-2">
                    <label class="font-medium">Address</label>
                    <textarea class="w-full mt-1 p-2 border rounded"><?= $settings['address'] ?></textarea>
                </div>

                <div>
                    <label class="font-medium">Logo</label>
                    <input type="file" class="block mt-2" />
                    <img src="<?= $settings['logo'] ?>" class="h-12 mt-2" />
                </div>

                <div>
                    <label class="font-medium">Favicon</label>
                    <input type="file" class="block mt-2" />
                    <img src="<?= $settings['favicon'] ?>" class="h-10 mt-2" />
                </div>
            </div>
        </div>

        <!-- SEO -->
        <div>
            <h2 class="text-xl font-semibold mb-4 border-b pb-2">SEO Settings</h2>

            <div>
                <label class="font-medium">Meta Title</label>
                <input type="text" value="<?= $settings['seo_title'] ?>"
                    class="w-full mt-1 p-2 border rounded" />
            </div>

            <div class="mt-4">
                <label class="font-medium">Meta Description</label>
                <textarea class="w-full mt-1 p-2 border rounded"><?= $settings['seo_description'] ?></textarea>
            </div>
        </div>

        <!-- Social Links -->
        <div>
            <h2 class="text-xl font-semibold mb-4 border-b pb-2">Social Media Links</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="font-medium">Facebook</label>
                    <input type="text" value="<?= $settings['facebook'] ?>" class="w-full mt-1 p-2 border rounded">
                </div>
                <div>
                    <label class="font-medium">Instagram</label>
                    <input type="text" value="<?= $settings['instagram'] ?>" class="w-full mt-1 p-2 border rounded">
                </div>
                <div>
                    <label class="font-medium">Twitter</label>
                    <input type="text" value="<?= $settings['twitter'] ?>" class="w-full mt-1 p-2 border rounded">
                </div>
            </div>
        </div>

        <!-- Maintenance Mode -->
        <div>
            <h2 class="text-xl font-semibold mb-4 border-b pb-2">Maintenance Mode</h2>

            <label class="flex items-center gap-3">
                <input type="checkbox" <?= $settings['maintenance'] ? 'checked' : '' ?>
                    class="w-5 h-5">
                <span class="font-medium">Enable Maintenance Mode</span>
            </label>
            <p class="text-sm text-gray-500">If enabled, normal visitors will see a maintenance page.</p>
        </div>

        <!-- SMTP Settings (Optional) -->
        <div>
            <h2 class="text-xl font-semibold mb-4 border-b pb-2">Email SMTP Settings</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input class="p-2 border rounded" placeholder="SMTP Host">
                <input class="p-2 border rounded" placeholder="SMTP Username">
                <input class="p-2 border rounded" placeholder="SMTP Password">
                <input class="p-2 border rounded" placeholder="SMTP Port">
            </div>
        </div>

        <button class="px-6 py-3 bg-blue-600 text-white rounded-md">
            Save Settings
        </button>

    </form>

</div>

