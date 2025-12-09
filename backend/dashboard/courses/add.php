<?php
// hole($_POST);
$college_id = $route_data['params']['college_id'];
insertData("courses",$_POST);
location("/dashboard/$college_id/courses?status=success");