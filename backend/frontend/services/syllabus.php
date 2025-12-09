<?php validate(); ?>
<?= component("banner",[
    "title"=>"Syllabus",
]) ?>

<div class="max-w-6xl mx-auto my-10 bg-white shadow-md rounded-lg overflow-hidden border">
    <div class="overflow-x-auto">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-[#004a70] text-white text-center">
                    <th class="py-3 px-4 text-lg font-semibold border-r">Hindi Medium</th>
                    <th class="py-3 px-4 text-lg font-semibold">English Medium</th>
                </tr>
            </thead>

            <tbody class="text-gray-700">
                <!-- ROW -->
                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="py-3 px-4 border-r text-center">
                        <a href="<?= URL . "/" ?>">
                            Education: Education in Contemporary India
                        </a>
                    </td>
                    <td class="py-3 px-4 text-center">
                        <a href="<?= URL . "/" ?>">
                            Education: Education in Contemporary India
                        </a>
                    </td>
                </tr>

                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="py-3 px-4 border-r text-center">
                        <a href="<?= URL . "/" ?>">
                            Hindi: Hindi Cinema Aur Uske Adhyayan
                        </a>
                    </td>
                    <td class="py-3 px-4 text-center">
                        <a href="<?= URL . "/" ?>">
                            Hindi: Hindi Cinema Aur Uske Adhyayan
                        </a>
                    </td>
                </tr>

                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="py-3 px-4 border-r text-center">
                        <a href="<?= URL . "/" ?>">
                            English: Indian Classical Literature
                        </a>
                    </td>
                    <td class="py-3 px-4 text-center">
                        <a href="<?= URL . "/" ?>">
                            English: Indian Classical Literature
                        </a>
                    </td>
                </tr>

                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="py-3 px-4 border-r text-center">
                        <a href="<?= URL . "/" ?>">
                            History: Ancient Societies
                        </a>
                    </td>
                    <td class="py-3 px-4 text-center">
                        <a href="<?= URL . "/" ?>">
                            History: Ancient Societies
                        </a>
                    </td>
                </tr>

                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="py-3 px-4 border-r text-center">
                        <a href="<?= URL . "/" ?>">
                            Political Science: Public Administration in India
                        </a>
                    </td>
                    <td class="py-3 px-4 text-center">
                        <a href="<?= URL . "/" ?>">
                            Political Science: Public Administration in India
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>