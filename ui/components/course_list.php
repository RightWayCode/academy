<section class="px-6 py-20 bg-gradient-to-b from-white to-gray-100">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

            <?php foreach ($data as $key) { ?>
                <!-- <a hole($data[0]) ?> -->
                <a href="<?= $key['url'] ?>"
                    class="group bg-white rounded-3xl gap-6 p-4 border border-gray-100 shadow-md hover:shadow-xl hover:-translate-y-1 hover:border-blue-500 transition-all duration-300 cursor-pointer">
                    <h3 class="text-xl font-semibold text-gray-900 group-hover:text-blue-600 transition">
                        <?= $key['title'] ?>
                    </h3>
                    <button
                        class="mt-1 inline-flex items-center text-blue-600 font-semibold gap-2 group-hover:gap-3 transition-all">
                        Click here →
                    </button>
                </a>
            <?php } ?>

        </div>
    </div>
</section>