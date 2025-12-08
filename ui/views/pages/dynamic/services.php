<?php validate();
// hole($route_data);
$title = $route_data['page_info']['service'];
$service = $route_data['params']['service'];
$course = $route_data['params']['course'];
$semester = $route_data['params']['semester'];

?>
<?= component("banner", [
    "title" => $title,
]) ?>

<?= component("course_list", [
    [
        "title"=>"Semester 1",
        "url" => URL . "/du-sol/$course/semester-$semester/books",
    ],
    [
        "title"=>"Semester 1",
        "url" => URL . "/du-sol/$course/semester-$semester/classes",
    ],
    [
        "title"=>"Semester 1",
        "url" => URL . "/du-sol/$course/semester-$semester/syllabus",
    ],
    [
        "title"=>"Semester 1",
        "url" => URL . "/du-sol/$course/semester-$semester/pyqs",
    ],
    [
        "title"=>"Semester 1",
        "url" => URL . "/du-sol/$course/semester-$semester/notes",
    ],
]) ?>