<?php validate();
// hole($route_data);
$course = $route_data['params']['course'] ?? $data['course'];
$semester = $route_data['params']['semester'];
$medium = $route_data['params']['medium'] ?? "english";

$course_id = findOne("courses", "slug=:slug", ["slug" => $course], ['course_id'])['course_id'];
$service_id = findOne("services", "slug=:slug", ["slug" => "notes"], ['service_id'])['service_id'];
// hole($course_id);
$products = findMany(
    "products",
    ' course_id=:course_id AND service_id=:service_id AND semester=:semester AND medium=:medium',
    [
        "course_id" => $course_id,
        "service_id" => $service_id,
        "semester" => $semester,
        "medium" => $medium,
    ],
    ["product_name", "slug"]
);
$creating_products_data = [];
foreach ($products as $key => $value) {
    array_push($creating_products_data,[
        "title"=>$value['product_name'],
        "url"=> URL . "/du-sol/$course/semester-$semester/$medium/notes/".$value['slug']
    ]);
}
?>
<?= component("banner", [
    "title" => "Services",
]) ?>

<?= component("course_list", $creating_products_data) ?>