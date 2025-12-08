<?php validate();
// hole($route_data);
$title = $route_data['page_info']['service'];
$service = $route_data['params']['service'];

?>
<?= component("banner", [
    "title" => $title,
]) ?>
<?= component("course_list", [
    [
        "title" => "B.A Programme",
        "url" => URL . "/du-sol/ba-program/semesters",
    ],
    [
        "title" => "B.A Political",
        "url" => URL . "/du-sol/ba-political-science-hons/semesters",
    ],
    [
        "title" => "B.A English",
        "url" => URL . "/du-sol/ba-english-hons/semesters",
    ],
    [
        "title" => "B.Com",
        "url" => URL . "/du-sol/bcom-programme/semesters",
    ],
    [
        "title" => "B.Com Honours",
        "url" => URL . "/du-sol/bcom-hons/semesters",
    ],
]) ?>