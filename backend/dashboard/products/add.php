<?php
$data = $_POST;
$file_path = uploadFile($_FILES['product_file']);
$data['file_path']=$file_path;
$college_id = $route_data['params']['college_id'];
$course_id = $route_data['params']['course_id'];
// hole($data);
insertData("products",$data);
location("/dashboard/$college_id/$course_id/products?status=success");