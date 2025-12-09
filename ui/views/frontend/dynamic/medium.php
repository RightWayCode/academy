<?php 
validate();
// hole($route_data);
$course = $route_data['params']['course'];
$semester = $route_data['params']['semester'];

?>
<?= component("banner", [
    "title" => "Medium",
]) ?>

<?= component("course_list", [
    [
        "title"=>"English",
        "url" => URL . "/du-sol/$course/semester-$semester/english",
    ],
    [
        "title"=>"Hindi",
        "url" => URL . "/du-sol/$course/semester-$semester/hindi",
    ],
]) ?>