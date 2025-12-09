<?php 

get("/du-sol/ba-english-hons/semester-{semester}/notes","/frontend/services/notes",['course'=>"ba-english-hons"]);
get("/du-sol/bcom-programme/semester-{semester}/notes","/frontend/services/notes",['course'=>"bcom-programme"]);
get("/du-sol/bcom-hons/semester-{semester}/notes","/frontend/services/notes",['course'=>"bcom-hons"]);

get("/du-sol/ba-english-hons/semester-{semester}/books","/frontend/services/books",['course'=>"ba-english-hons"]);
get("/du-sol/bcom-programme/semester-{semester}/books","/frontend/services/books",['course'=>"bcom-programme"]);
get("/du-sol/bcom-hons/semester-{semester}/books","/frontend/services/books",['course'=>"bcom-hons"]);

get("/du-sol/ba-english-hons/semester-{semester}/classes","/frontend/services/classes",['course'=>"ba-english-hons"]);
get("/du-sol/bcom-programme/semester-{semester}/classes","/frontend/services/classes",['course'=>"bcom-programme"]);
get("/du-sol/bcom-hons/semester-{semester}/classes","/frontend/services/classes",['course'=>"bcom-hons"]);

get("/du-sol/ba-english-hons/semester-{semester}/syllabus","/frontend/services/syllabus",['course'=>"ba-english-hons"]);
get("/du-sol/bcom-programme/semester-{semester}/syllabus","/frontend/services/syllabus",['course'=>"bcom-programme"]);
get("/du-sol/bcom-hons/semester-{semester}/syllabus","/frontend/services/syllabus",['course'=>"bcom-hons"]);

get("/du-sol/ba-english-hons/semester-{semester}/pyqs","/frontend/services/pyqs",['course'=>"ba-english-hons"]);
get("/du-sol/bcom-programme/semester-{semester}/pyqs","/frontend/services/pyqs",['course'=>"bcom-programme"]);
get("/du-sol/bcom-hons/semester-{semester}/pyqs","/frontend/services/pyqs",['course'=>"bcom-hons"]);


// products
get("/du-sol/{course}/semester-{semester}/{medium}/notes","frontend/services/notes");
get("/du-sol/{course}/semester-{semester}/{medium}/books","frontend/services/books");
get("/du-sol/{course}/semester-{semester}/{medium}/classes","frontend/services/class");
get("/du-sol/{course}/semester-{semester}/{medium}/syllabus","frontend/services/syllabus");
get("/du-sol/{course}/semester-{semester}/{medium}/pyqs","frontend/services/pyqs");
