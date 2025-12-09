<?php validate();
// hole($route_data);
$course = $route_data['params']['course'];

?>
<?= component("banner", [
    "title" => "Products",
]) ?>

<?= component("course_list", [
    [
        "title"=>"Semester 1",
        "url" => URL . "/du-sol/$course/semester-1",
    ],
    [
        "title"=>"Semester 2",
        "url" => URL . "/du-sol/$course/semester-2",
    ],
    [
        "title"=>"Semester 3",
        "url" => URL . "/du-sol/$course/semester-3",
    ],
    [
        "title"=>"Semester 4",
        "url" => URL . "/du-sol/$course/semester-4",
    ],
    [
        "title"=>"Semester 5",
        "url" => URL . "/du-sol/$course/semester-5",
    ],
    [
        "title"=>"Semester 6",
        "url" => URL . "/du-sol/$course/semester-6",
    ],
]) ?>