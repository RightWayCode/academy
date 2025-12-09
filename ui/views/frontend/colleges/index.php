<!-- HERO / SLIDER -->
<section class="relative w-full h-[420px] md:h-[520px] overflow-hidden">
    <div class="slides relative w-full h-full">
        <!-- slide 0 -->
        <article class="slide absolute inset-0 opacity-100 transition-opacity duration-700" aria-hidden="false">
            <img src="<?= url("/assets/uploads/banner/banner1.jpg") ?>" alt="DU SOL Admission"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-black/50 via-black/20 to-transparent flex items-center">
                <div class="max-w-6xl mx-auto px-6 md:px-12">
                    <h1 class="text-3xl md:text-5xl font-extrabold text-white drop-shadow-lg leading-tight">Fast &
                        Trusted DU SOL Admissions</h1>
                    <p class="mt-4 text-white/90 text-lg md:text-xl max-w-2xl">Ashish Tiwari Academy helps students
                        complete DU
                        SOL admission, choose right subjects, and get study resources — all in one trusted place.</p>
                    <div class="mt-6 flex gap-3">
                        <a href="#contact"
                            class="bg-orange-600 hover:bg-orange-700 text-white px-5 py-3 rounded-md font-semibold">Apply
                            Now</a>
                        <a href="#services"
                            class="bg-white/90 hover:bg-white text-gray-900 px-5 py-3 rounded-md font-medium">Our
                            Services</a>
                    </div>
                </div>
            </div>
        </article>

        <!-- slide 1 -->
        <article class="slide absolute inset-0 opacity-0 transition-opacity duration-700" aria-hidden="true">
            <img src="<?= url("/assets/uploads/banner/banner2.jpg") ?>" alt="Expert Tutors"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/30 flex items-center">
                <div class="max-w-6xl mx-auto px-6 md:px-12">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-white">Live & Recorded Classes — For All DU SOL
                        Courses</h2>
                    <p class="mt-3 text-white/90 max-w-2xl">Small batches, experienced tutors, and focused doubt-solving
                        sessions to help you score better.</p>
                    <div class="mt-6">
                        <a href="#courses"
                            class="bg-white/90 hover:bg-white text-gray-900 px-5 py-3 rounded-md font-medium">View
                            Courses</a>
                    </div>
                </div>
            </div>
        </article>

        <!-- slide 2 -->
        <article class="slide absolute inset-0 opacity-0 transition-opacity duration-700" aria-hidden="true">
            <img src="<?= url("/assets/uploads/banner/banner3.webp") ?>" alt="Study Materials"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-l from-black/50 via-black/30 to-transparent flex items-center">
                <div class="max-w-6xl mx-auto px-6 md:px-12">
                    <h2 class="text-3xl md:text-5xl font-extrabold text-white">Notes, PYQs & Assignments — Ready To
                        Download</h2>
                    <p class="mt-3 text-white/90 max-w-2xl">Curated study bundles for each subject — updated for the
                        latest DU SOL syllabus.</p>
                    <div class="mt-6">
                        <a href="#services"
                            class="bg-orange-600 hover:bg-orange-700 text-white px-5 py-3 rounded-md font-semibold">Get
                            Study Pack</a>
                    </div>
                </div>
            </div>
        </article>
    </div>

    <!-- controls -->
    <button id="prev"
        class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-black/60 text-white rounded-full p-3">‹</button>
    <button id="next"
        class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-black/60 text-white rounded-full p-3">›</button>

    <!-- dots -->
    <div class="absolute bottom-6 left-0 right-0 flex justify-center gap-3">
        <button class="dot w-3 h-3 rounded-full bg-white/90" aria-label="Slide 1"></button>
        <button class="dot w-3 h-3 rounded-full bg-white/50" aria-label="Slide 2"></button>
        <button class="dot w-3 h-3 rounded-full bg-white/50" aria-label="Slide 3"></button>
    </div>
</section>

<!-- SERVICES -->
<section id="courses" class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-6">
        
        <h4 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            DU SOL Courses
        </h4>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">

            <article class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <h5 class="font-semibold text-lg">BA Programme</h5>
                <p class="mt-2 text-sm text-gray-600">
                    Explore DU SOL BA Programme syllabus, subjects, books, assignments and exam details.
                </p>
                <a href="<?= URL . '/du-sol/ba-programme' ?>" class="mt-4 inline-block text-orange-600 font-semibold">
                    View BA Programme →
                </a>
            </article>

            <article class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <h5 class="font-semibold text-lg">BA Political Science Hons</h5>
                <p class="mt-2 text-sm text-gray-600">
                    Explore DU SOL BA Political Science Hons syllabus, subjects, books, assignments and exam details.
                </p>
                <a href="<?= URL . '/du-sol/ba-political-science-hons' ?>" class="mt-4 inline-block text-orange-600 font-semibold">
                    View BA Political Science Hons →
                </a>
            </article>

            <article class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <h5 class="font-semibold text-lg">B.Com</h5>
                <p class="mt-2 text-sm text-gray-600">
                    Updated DU SOL B.Com course structure, study material, question papers and exam pattern.
                </p>
                <a href="<?= URL . '/du-sol/bcom-programme' ?>" class="mt-4 inline-block text-orange-600 font-semibold">
                    View B.Com →
                </a>
            </article>

            <article class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <h5 class="font-semibold text-lg">B.Com (Hons.)</h5>
                <p class="mt-2 text-sm text-gray-600">
                    Detailed curriculum, books, notes and previous year papers for B.Com (Hons.) students.
                </p>
                <a href="<?= URL . '/du-sol/bcom-hons' ?>" class="mt-4 inline-block text-orange-600 font-semibold">
                    View B.Com (Hons.) →
                </a>
            </article>

            <article class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <h5 class="font-semibold text-lg">BA English (Hons.)</h5>
                <p class="mt-2 text-sm text-gray-600">
                    Complete guide on BA English (Hons.) syllabus, important texts, notes and exam resources.
                </p>
                <a href="<?= URL . '/du-sol/ba-english-hons' ?>" class="mt-4 inline-block text-orange-600 font-semibold">
                    View BA English (Hons.) →
                </a>
            </article>

            <!-- <article class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <h5 class="font-semibold text-lg">MA Programme</h5>
                <p class="mt-2 text-sm text-gray-600">
                    Check DU SOL MA course details, specializations, books, notes and exam schedule.
                </p>
                <a href="<?= URL . '/du-sol/ma' ?>" class="mt-4 inline-block text-orange-600 font-semibold">
                    View MA Programme →
                </a>
            </article>

            <article class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <h5 class="font-semibold text-lg">M.Com</h5>
                <p class="mt-2 text-sm text-gray-600">
                    Updated M.Com syllabus, study materials, solved questions and preparation support.
                </p>
                <a href="<?= URL . '/du-sol/mcom' ?>" class="mt-4 inline-block text-orange-600 font-semibold">
                    View M.Com →
                </a>
            </article> -->

        </div>
    </div>
</section>


<!-- CTA BANNER: admission help (similar to earlier) -->
<section class="bg-[#004568] py-6">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4">
        <h3 class="text-white text-lg md:text-xl font-semibold">Need help with DU SOL Admission or Subjects? Reach out
            now.</h3>
        <div class="flex items-center gap-3">
            <a href="#contact"
                class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-md font-semibold">Consult Now</a>
            <a href="tel:+919876543210"
                class="bg-white/90 hover:bg-white text-gray-900 px-4 py-2 rounded-md font-medium">+91 9717572295</a>
        </div>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="max-w-7xl mx-auto px-6 py-12">
    <h4 class="text-2xl font-bold text-gray-800 mb-6 text-center">Frequently Asked Questions</h4>

    <div class="grid md:grid-cols-2 gap-6">
        <!-- faq item -->
        <details class="bg-white p-5 rounded-xl shadow">
            <summary class="font-semibold cursor-pointer">How do I apply for DU SOL admission?</summary>
            <div class="mt-3 text-gray-600">Contact Ashish Tiwari Academy with your details, we will guide you through
                the DU
                SOL online application, documents required and fee payment.</div>
        </details>

        <details class="bg-white p-5 rounded-xl shadow">
            <summary class="font-semibold cursor-pointer">Do you provide assignment help?</summary>
            <div class="mt-3 text-gray-600">Yes — we provide well-researched assignment solutions and project guidance
                that adhere to DU SOL requirements.</div>
        </details>

        <details class="bg-white p-5 rounded-xl shadow">
            <summary class="font-semibold cursor-pointer">Are the notes updated as per the latest syllabus?</summary>
            <div class="mt-3 text-gray-600">Yes, all notes, PYQs and study packs are updated each term based on the
                current DU SOL syllabus and exam pattern.</div>
        </details>

        <details class="bg-white p-5 rounded-xl shadow">
            <summary class="font-semibold cursor-pointer">What are the fees for classes?</summary>
            <div class="mt-3 text-gray-600">Fees vary by course and batch. Contact us with the subject and preferred
                timing and we’ll share the available options.</div>
        </details>
    </div>
</section>