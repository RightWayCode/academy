<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Ashish Academy — DU SOL Experts | Admission, Books, Notes, PYQs & Classes</title>
    <meta name="description"
        content="Ashish Academy — DU SOL specialists. Admission help, study materials, PYQs, notes and online/offline classes for DU SOL students. Trusted guidance, fast admission, expert tutors." />
    <meta name="keywords"
        content="DU SOL, DU SOL admission, Ashish Academy, DU SOL books, DU SOL notes, DU SOL PYQs, DU SOL classes" />
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->

    <link rel="stylesheet" href="<?= url('/assets/css/style.css') ?>">
    <!-- JSON-LD for Organization -->
    <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "EducationalOrganization",
    "name": "Ashish Academy - DU SOL Experts",
    "url": "https://yourdomain.example",
    "logo": "https://yourdomain.example/assets/logo.png",
    "sameAs": [],
    "contactPoint": [{
      "@type": "ContactPoint",
      "telephone": "+91-9876543210",
      "contactType": "customer service",
      "areaServed": "IN"
    }]
  }
  </script>

    <style>
        /* small extra styles for nicer dots/arrows */
        .dot.active {
            background: white !important;
            box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.12);
        }

        .no-select {
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
</head>

<body class="antialiased text-gray-800">


    <!-- TOP HEADER -->
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
            <!-- logo -->
            <a href="<?= URL ?>/" class="flex items-center gap-3">
                <img src="<?= URL ?>/assets/logo.jpg" alt="Ashish Tiwari Academy"
                    class="h-10 w-10 rounded-md object-cover">
                <div>
                    <div class="text-lg font-bold">Ashish Tiwari Academy</div>
                    <div class="text-xs text-gray-500 -mt-0.5">DU SOL Experts</div>
                </div>
            </a>

            <!-- nav -->
            <nav class="hidden md:flex items-center gap-6 font-medium text-gray-700">
                <a href="<?= url("/") ?>" class="hover:text-blue-600">Home</a>
                <a href="<?= url("/about") ?>" class="hover:text-blue-600">About</a>
                <a href="<?= url("/services") ?>" class="hover:text-blue-600">Services</a>
                <a href="<?= url('/blogs') ?>" class="hover:text-blue-600">Blogs</a>
                <!-- <a href="<?= url("/courses") ?>" class="hover:text-blue-600">Courses</a>
        <a href="<?= url("/testimonials") ?>" class="hover:text-blue-600">Testimonials</a> -->
                <a href="<?= url("/contact") ?>" class="hover:text-blue-600">Contact</a>
            </nav>

            <!-- contact / mobile -->
            <div class="flex items-center gap-3">
                <div class="hidden md:flex flex-col text-right text-xs">
                    <span class="text-gray-700 font-semibold">+91 9717572295</span>
                    <a href="mailto:support@ashishtiwariacademy.in"
                        class="text-gray-500">support@ashishtiwariacademy.in</a>
                </div>

                <a href="#contact"
                    class="ml-3 bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-md font-semibold">
                    Consult Now
                </a>

                <!-- mobile menu button -->
                <button id="mobileToggle" class="md:hidden ml-2 text-2xl" aria-label="Open menu">☰</button>
            </div>
        </div>

        <!-- mobile nav -->
        <div id="mobileNav" class="hidden md:hidden bg-white border-t">
            <div class="max-w-7xl mx-auto px-4 py-3 flex flex-col gap-2">
                <a href="#" class="py-2 border-b">Home</a>
                <a href="#about" class="py-2 border-b">About</a>
                <a href="#services" class="py-2 border-b">Services</a>
                <a href="#courses" class="py-2 border-b">Courses</a>
                <a href="#testimonials" class="py-2 border-b">Testimonials</a>
                <a href="#contact" class="py-2">Contact</a>
            </div>
        </div>
    </header>

    <main>
        <?php echo $content ?>
    </main>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-gray-300">
        <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-6">
            <div>
                <h6 class="text-white font-bold">Ashish Tiwari Academy</h6>
                <p class="mt-3 text-sm">DU SOL Experts — Admission support, classes, notes, PYQs and assignments.</p>
            </div>

            <div>
                <h6 class="text-white font-semibold">Useful Links</h6>
                <ul class="mt-3 space-y-2 text-sm">
                    <li><a href="<?= URL ?>/about" class="hover:text-white">About Us</a></li>
                    <li><a href="<?= URL ?>/contact" class="hover:text-white">Contact Us</a></li>
                    <!-- <li><a href="<?= URL ?>/courses" class="hover:text-white">Courses</a></li> -->
                    <!-- <li><a href="<?= URL ?>/testimonials" class="hover:text-white">Testimonials</a></li> -->
                </ul>
            </div>

            <div>
                <h6 class="text-white font-semibold">Information</h6>
                <ul class="mt-3 space-y-2 text-sm">
                    <li><a href="<?= URL ?>/privacy" class="hover:text-white">Privacy Policy</a></li>
                    <li><a href="<?= URL ?>/terms" class="hover:text-white">Terms & Conditions</a></li>
                    <li><a href="<?= URL ?>/refund" class="hover:text-white">Refund & Return</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800">
            <div
                class="max-w-7xl mx-auto px-6 py-4 flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
                <div>© <span id="year"></span> Ashish Tiwari Academy. All rights reserved.</div>
                <div class="mt-2 md:mt-0">Designed for DU SOL students • Trusted assistance</div>
            </div>
        </div>
    </footer>

    <!-- Sticky contact bubble -->
    <a href="tel:+919717572295"
        class="fixed right-4 bottom-4 bg-orange-600 text-white rounded-full p-4 shadow-lg no-select" title="Call us">
        📞
    </a>
    <!-- SCRIPTS: slider, mobile, testimonials -->
    <script src="./assets/js/custom.js"></script>

</body>

</html>