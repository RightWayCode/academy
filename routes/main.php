<?php
layout_start();
get("/","/frontend/index");
get("/contact","/frontend/contact");
get("/about","/frontend/about");
get("/cart","/frontend/cart");
get("/services","/frontend/services");
get("/courses","/frontend/courses");
get("/privacy","/frontend/privacy");
get("/refund","/frontend/refund");
get("/terms","/frontend/terms");

post("/cart","/frontend/cart");

// dynamic url
get("/du-sol","frontend/colleges/index");
get("/du-sol/{course}","frontend/dynamic/semester");

// english
get("/du-sol/ba-english-hons/semester-{semester}","/frontend/dynamic/services_english",['course'=>"ba-english-hons"]);
get("/du-sol/bcom-programme/semester-{semester}","/frontend/dynamic/services_english",['course'=>"bcom-programme"]);
get("/du-sol/bcom-hons/semester-{semester}","/frontend/dynamic/services_english",['course'=>"bcom-hons"]);
// hindi/english
get("/du-sol/{course}/semester-{semester}","/frontend/dynamic/medium");
get("/du-sol/{course}/semester-{semester}/{medium}","frontend/dynamic/services");

require __DIR__."/group/services.php";
require __DIR__."/group/products.php";

// registration 
get("/du-sol-registration-and-support-service","pages/registration");

// blogs
get("/blogs","blogs");
get("/blog/{slug}","pages/blog");

layout_end();
// hole("page");
get("/checkout/verify","/gateway/verify");
post("/checkout/process","/gateway/checkout");
get("/checkout/success","/gateway/success");
get("/checkout/failed","/gateway/failed");