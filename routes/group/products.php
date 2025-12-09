<?php 

get("/du-sol/ba-english-hons/semester-{semester}/notes/{products}","/frontend/services/details/notes",['course'=>"ba-english-hons"]);
get("/du-sol/bcom-programme/semester-{semester}/notes/{products}","/frontend/services/details/notes",['course'=>"bcom-programme"]);
get("/du-sol/bcom-hons/semester-{semester}/notes/{products}","/frontend/services/details/notes",['course'=>"bcom-hons"]);

get("/du-sol/ba-english-hons/semester-{semester}/books/{products}","/frontend/services/details/books",['course'=>"ba-english-hons"]);
get("/du-sol/bcom-programme/semester-{semester}/books/{products}","/frontend/services/details/books",['course'=>"bcom-programme"]);
get("/du-sol/bcom-hons/semester-{semester}/books/{products}","/frontend/services/details/books",['course'=>"bcom-hons"]);

get("/du-sol/ba-english-hons/semester-{semester}/classes/{products}","/frontend/services/details/classes",['course'=>"ba-english-hons"]);
get("/du-sol/bcom-programme/semester-{semester}/classes/{products}","/frontend/services/details/classes",['course'=>"bcom-programme"]);
get("/du-sol/bcom-hons/semester-{semester}/classes/{products}","/frontend/services/details/classes",['course'=>"bcom-hons"]);

get("/du-sol/ba-english-hons/semester-{semester}/syllabus/{products}","/frontend/services/details/syllabus",['course'=>"ba-english-hons"]);
get("/du-sol/bcom-programme/semester-{semester}/syllabus/{products}","/frontend/services/details/syllabus",['course'=>"bcom-programme"]);
get("/du-sol/bcom-hons/semester-{semester}/syllabus/{products}","/frontend/services/details/syllabus",['course'=>"bcom-hons"]);

get("/du-sol/ba-english-hons/semester-{semester}/pyqs/{products}","/frontend/services/details/pyqs",['course'=>"ba-english-hons"]);
get("/du-sol/bcom-programme/semester-{semester}/pyqs/{products}","/frontend/services/details/pyqs",['course'=>"bcom-programme"]);
get("/du-sol/bcom-hons/semester-{semester}/pyqs/{products}","/frontend/services/details/pyqs",['course'=>"bcom-hons"]);


// products details
get("/du-sol/{course}/semester-{semester}/{medium}/notes/{products}","frontend/services/details/notes");
get("/du-sol/{course}/semester-{semester}/{medium}/books/{products}","frontend/services/details/books");
get("/du-sol/{course}/semester-{semester}/{medium}/classes/{products}","frontend/services/details/class");
get("/du-sol/{course}/semester-{semester}/{medium}/syllabus/{products}","frontend/services/details/syllabus");
get("/du-sol/{course}/semester-{semester}/{medium}/pyqs/{products}","frontend/services/details/pyqs");

post('/du-sol/{course}/semester-{semester}/{medium}/notes/{products}',"/frontend/services/notes");