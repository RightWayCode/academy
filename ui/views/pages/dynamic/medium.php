<?php 
validate();
// hole($route_data);
$title = $route_data['page_info']['medium'];
$service = $route_data['params']['service'];
$course = $route_data['params']['course'];
$semester = $route_data['params']['semester'];

?>
<?= component("banner", [
    "title" => $title,
]) ?>

<?= component("course_list", [
    [
        "title"=>"English",
        "url" => URL . "/du-sol/$service/$course/$semester/english",
    ],
    [
        "title"=>"Hindi",
        "url" => URL . "/du-sol/$service/$course/$semester/hindi",
    ],
]) ?>