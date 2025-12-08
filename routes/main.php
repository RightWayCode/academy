<?php
layout_start();
get("/","/index");
get("/contact","/contact");
get("/about","/about");
get("/services","/services");
get("/courses","/courses");
get("/privacy","/privacy");
get("/refund","/refund");
get("/terms","/terms");

// dynamic url
get("/du-sol/courses","pages/dynamic/courses");
get("/du-sol/{course}/semesters","pages/dynamic/semester");
get("/du-sol/{course}/semester-{semester}","pages/dynamic/services");
get("/du-sol/{course}/semester-{semester}/{service}","pages/dynamic/products");
// get("/du-sol/{course}/semester-{semester}/{subject}/{items}","pages/dynamic/semester/item");

// non-medium/english
get("/du-sol/ba-english-hons/semester-{semester}/{service}/{subject}/{products}","pages/products");
get("/du-sol/bcom-programme/semester-{semester}/{service}/{subject}/{products}","pages/products");
get("/du-sol/bcom-hons/semester-{semester}/{service}/{subject}/{products}","pages/products");
// now notes
get("/du-sol/{course}/semester-{semester}/{service}/{subject}/{medium}","pages/medium");
get("/du-sol/{course}/semester-{semester}/{service}/{subject}/{medium}/{products}","pages/products");


// registration 
get("/du-sol-registration-and-support-service","pages/registration");

// blogs
get("/blogs","blogs");
get("/blog/{slug}","pages/blog");

layout_end();




















// // semester wise breaking support
// get("/du-sol/books/{course}/semester-{semester}/{subject}/{products}","pages/books");
// get("/du-sol/notes/{course}/semester-{semester}/{subject}/{products}","pages/notes");
// get("/du-sol/syllabus/{course}/semester-{semester}/{subject}/{products}","pages/syllabus");
// get("/du-sol/classes/{course}/semester-{semester}/{subject}/{products}","pages/classes");
// get("/du-sol/pyqs/{course}/semester-{semester}/{subject}/{products}","pages/pyqs");
