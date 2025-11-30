<!-- Universal Banner -->
<section class="w-full bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 text-white py-16">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6">
            <!-- Icon / Badge -->
            <div
                class="flex-shrink-0 w-16 h-16 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center">
                <!-- replace SVG if needed -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-width="1.5" d="M12 11.25a2.25 2.25 0 100-4.5 2.25 2.25 0 000 4.5z" />
                    <path stroke-width="1.5" d="M4.5 18.75a7.5 7.5 0 1115 0v.75H4.5v-.75z" />
                </svg>
            </div>

            <!-- Content -->
            <div class="flex-1 text-center sm:text-left">
                <div class="flex items-center justify-center sm:justify-start gap-3">
                    <h1 id="banner-title" class="text-3xl md:text-4xl font-extrabold tracking-tight"><?= $data['title'] ?></h1>
                    <span id="banner-badge"
                        class="ml-2 px-3 py-1 rounded-full text-sm font-medium bg-white/10 border border-white/20 hidden">Badge</span>
                </div>

                <p id="banner-sub" class="mt-3 text-lg opacity-95 max-w-3xl">Default subtitle — short description that
                    explains the page and helps SEO.</p>
            </div>
        </div>
    </div>
</section>
