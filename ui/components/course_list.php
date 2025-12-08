<section class="px-6 py-20 bg-gradient-to-b from-white to-gray-100">
    <div class="max-w-3xl mx-auto space-y-4">

        <?php foreach ($data as $key) { ?>
        <a href="<?= $key['url'] ?>" 
            class="group block bg-white rounded-xl py-4 px-6 border border-gray-200 
                   shadow-sm hover:shadow-md hover:-translate-y-0.5 
                   hover:border-blue-500/60 transition-all duration-300">

            <div class="flex items-center justify-between">
                
                <h3 class="text-lg font-semibold text-gray-900 
                           group-hover:text-blue-600 transition-colors">
                    <?= $key['title'] ?>
                </h3>

                <span class="text-blue-600 font-medium text-base flex items-center gap-1 
                             transition-all duration-300 group-hover:translate-x-1 group-hover:underline">
                    Click here →
                </span>

            </div>

        </a>
        <?php } ?>

    </div>
</section>
