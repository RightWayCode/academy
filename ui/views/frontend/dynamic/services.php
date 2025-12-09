<?php validate();
// hole($route_data);
$course = $route_data['params']['course'] ?? $data['course'];
$semester = $route_data['params']['semester'];
$medium = $route_data['params']['medium'];

?>
<?= component("banner", [
    "title" => "Services",
]) ?>

<?= component("course_list", [
    [
        "title"=>"Notes",
        "url" => URL . "/du-sol/$course/semester-$semester/$medium/notes",
    ],
    [
        "title"=>"Books",
        "url" => URL . "/du-sol/$course/semester-$semester/$medium/books",
    ],
    [
        "title"=>"Classes",
        "url" => URL . "/du-sol/$course/semester-$semester/$medium/classes",
    ],
    [
        "title"=>"Syllabus",
        "url" => URL . "/du-sol/$course/semester-$semester/$medium/syllabus",
    ],
    [
        "title"=>"PYQs",
        "url" => URL . "/du-sol/$course/semester-$semester/$medium/pyqs",
    ],
]) ?>