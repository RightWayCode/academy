<?php
$data = $_POST;
// hole($_FILES);
$file_path = uploadFile($_FILES['product_file']);
$data['file_path']=$file_path;
insertData("products",$data);
// location('dashboard/products?status=success');