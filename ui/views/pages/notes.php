<?php validate(); 
$course = $route_data['params']['course'];
$semester = $route_data['params']['semester'];
?>
<?= component("banner", [
    "title" => "Notes",
]) ?>
<?php
$hindi = [
    [
        "title" => "Education: Education in Contemporary India",
        "url" => URL . "/du-sol/notes/$course/semester-$semester/education-education-in-contemporary-india"
    ],
    [
        "title" => "Hindi: Hindi Cinema Aur Uske Adhyayan",
        "url" => URL . "/du-sol/notes/$course/semester-$semester/hindi-hindi-cinema-aur-uske-adhyayan"
    ],
    [
        "title" => "English: Indian Classical Literature",
        "url" => URL . "/du-sol/notes/$course/semester-$semester/english-indian-classical-literature"
    ],
    [
        "title" => "History: Ancient Societies",
        "url" => URL . "/du-sol/notes/$course/semester-$semester/history-ancient-societies"
    ],
    [
        "title" => "Political Science: Public Administration in India",
        "url" => URL . "/du-sol/notes/$course/semester-$semester/political-science-public-administration-in-india"
    ],
];

$english = [
    [
        "title" => "Education: Education in Contemporary India",
        "url" => URL . "/du-sol/notes/$course/semester-$semester/education-education-in-contemporary-india"
    ],
    [
        "title" => "Hindi: Hindi Cinema Aur Uske Adhyayan",
        "url" => URL . "/du-sol/notes/$course/semester-$semester/hindi-hindi-cinema-aur-uske-adhyayan"
    ],
    [
        "title" => "English: Indian Classical Literature",
        "url" => URL . "/du-sol/notes/$course/semester-$semester/english-indian-classical-literature"
    ],
    [
        "title" => "History: Ancient Societies",
        "url" => URL . "/du-sol/notes/$course/semester-$semester/history-ancient-societies"
    ],
    [
        "title" => "Political Science: Public Administration in India",
        "url" => URL . "/du-sol/notes/$course/semester-$semester/political-science-public-administration-in-india"
    ],
];

?>

<div class="max-w-6xl mx-auto my-10 bg-white shadow-md rounded-lg border p-6">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Hindi Medium -->
        <?php if (!empty($hindi)): ?>
            <div class="border rounded-lg shadow-sm">
                <div class="bg-[#004a70] text-white text-center py-3 rounded-t-lg text-lg font-semibold">
                    Hindi Medium
                </div>

                <div class="divide-y">
                    <?php foreach ($hindi as $item): ?>
                        <a href="<?= $item['url'] ?>"
                            class="block py-3 px-4 hover:bg-gray-50 transition text-gray-700 text-center">
                            <?= $item['title'] ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- English Medium -->
        <?php if (!empty($english)): ?>
            <div class="border rounded-lg shadow-sm">
                <div class="bg-[#004a70] text-white text-center py-3 rounded-t-lg text-lg font-semibold">
                    English Medium
                </div>

                <div class="divide-y">
                    <?php foreach ($english as $item): ?>
                        <a href="<?= $item['url'] ?>"
                            class="block py-3 px-4 hover:bg-gray-50 transition text-gray-700 text-center">
                            <?= $item['title'] ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>