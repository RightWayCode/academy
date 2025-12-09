<?php validate();
// hole($route_data);
$course = $data['course'];
$semester = $route_data['params']['semester'];

?>
<?= component("banner", [
    "title" => "Services",
]) ?>

<?= component("course_list", [
    [
        "title"=>"Notes",
        "url" => URL . "/du-sol/$course/semester-$semester/notes",
    ],
    [
        "title"=>"Books",
        "url" => URL . "/du-sol/$course/semester-$semester/books",
    ],
    [
        "title"=>"Classes",
        "url" => URL . "/du-sol/$course/semester-$semester/classes",
    ],
    [
        "title"=>"Syllabus",
        "url" => URL . "/du-sol/$course/semester-$semester/syllabus",
    ],
    [
        "title"=>"PYQs",
        "url" => URL . "/du-sol/$course/semester-$semester/pyqs",
    ],
]) ?>