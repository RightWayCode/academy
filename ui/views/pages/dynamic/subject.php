<?php validate();
// hole($route_data);
$title = $route_data['page_info']['service'];
$service = $route_data['params']['service'];
$course = $route_data['params']['course'];

?>
<?= component("banner", [
    "title" => $title,
]) ?>

<?= component("course_list", [
    [
        "title"=>"Semester 1",
        "url" => URL . "/du-sol/$service/$course/semester-1/subjects",
    ],
    [
        "title"=>"Semester 2",
        "url" => URL . "/du-sol/$service/$course/semester-2/subjects",
    ],
    [
        "title"=>"Semester 3",
        "url" => URL . "/du-sol/$service/$course/semester-3/subjects",
    ],
    [
        "title"=>"Semester 4",
        "url" => URL . "/du-sol/$service/$course/semester-4/subjects",
    ],
    [
        "title"=>"Semester 5",
        "url" => URL . "/du-sol/$service/$course/semester-5/subjects",
    ],
    [
        "title"=>"Semester 6",
        "url" => URL . "/du-sol/$service/$course/semester-6/subjects",
    ],
]) ?>