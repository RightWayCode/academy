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
        "url" => URL . "/du-sol/$service/ba-program",
    ],
    [
        "title" => "B.A Political",
        "url" => URL . "/du-sol/$service/ba-political-science-hons",
    ],
    [
        "title" => "B.A English",
        "url" => URL . "/du-sol/$service/ba-english-hons",
    ],
    [
        "title" => "B.Com",
        "url" => URL . "/du-sol/$service/bcom-programme",
    ],
    [
        "title" => "B.Com Honours",
        "url" => URL . "/du-sol/$service/bcom-hons",
    ],
]) ?>