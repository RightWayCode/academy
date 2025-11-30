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
get("/du-sol/{service}","pages/dynamic/courses");
get("/du-sol/{service}/{course}","pages/dynamic/semester");

// semester wise breaking support
get("/du-sol/books/{course}/semester-{semester}","pages/books");
get("/du-sol/notes/{course}/semester-{semester}","pages/notes");
get("/du-sol/syllabus/{course}/semester-{semester}","pages/syllabus");
get("/du-sol/classes/{course}/semester-{semester}","pages/classes");
get("/du-sol/pyqs/{course}/semester-{semester}","pages/pyqs");

get("/du-sol/notes/{course}/semester-{semester}/{notes}","pages/download_notes");

// registration 
get("/du-sol-registration-and-support-service","pages/registration");

// blogs
get("/blogs","blogs");
get("/blog/{slug}","pages/blog");

layout_end();