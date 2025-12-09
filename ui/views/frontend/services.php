<?= component("banner", [
    "title" => "Services",
]) ?>

<!-- SERVICES -->
<section id="services" class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-6">
        <h4 class="text-2xl font-bold text-gray-800 mb-6 text-center">Our DU SOL Services</h4>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
            <article class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <h5 class="font-semibold text-lg">Admission Assistance</h5>
                <p class="mt-2 text-sm text-gray-600">Complete application support, fee guidance, and document
                    verification for DU SOL admission.</p>
                <a href="<?= URL . "/du-sol-registration-and-support-service" ?>"
                    class="mt-4 inline-block text-orange-600 font-semibold">Get Admission Help →</a>
            </article>

            <article class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <h5 class="font-semibold text-lg">Books</h5>
                <p class="mt-2 text-sm text-gray-600">Subject-wise books, and revision packs updated
                    for the current syllabus.</p>
                <a href="<?= URL . "/du-sol/books/courses" ?>" class="mt-4 inline-block text-orange-600 font-semibold">Download
                    Books →</a>
            </article>

            <article class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <h5 class="font-semibold text-lg">Classes</h5>
                <p class="mt-2 text-sm text-gray-600">Regular batches, weekend classes and recorded lessons for flexible
                    learning.</p>
                <a href="<?= URL . "/du-sol/classes/courses" ?>" class="mt-4 inline-block text-orange-600 font-semibold">View
                    Classes →</a>
            </article>

            <article class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <h5 class="font-semibold text-lg capitalize">Syllabus</h5>
                <p class="mt-2 text-sm text-gray-600">
                    Download the updated DU SOL syllabus for all courses and semesters in one place.
                </p>
                <a href="<?= URL . '/du-sol/syllabus/courses' ?>" class="mt-4 inline-block text-orange-600 font-semibold">
                    View Syllabus →
                </a>
            </article>

            <article class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <h5 class="font-semibold text-lg">Previous Year Questions (PYQs)</h5>
                <p class="mt-2 text-sm text-gray-600">Solved PYQs and model answers to improve exam strategy and time
                    management.</p>
                <a href="<?= URL . "/du-sol/pyqs/courses" ?>" class="mt-4 inline-block text-orange-600 font-semibold">Download
                    PYQs →</a>
            </article>

            <article class="bg-white rounded-xl p-6 shadow hover:shadow-xl transition">
                <h5 class="font-semibold text-lg capitalize">Notes</h5>
                <p class="mt-2 text-sm text-gray-600">
                    Get high-quality DU SOL notes prepared according to the latest syllabus for easy exam preparation.
                </p>
                <a href="<?= URL . '/du-sol/notes/courses' ?>" class="mt-4 inline-block text-orange-600 font-semibold">
                    View Notes →
                </a>
            </article>

        </div>
    </div>
</section>