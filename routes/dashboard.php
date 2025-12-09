<?php
layout_start('dash');
get("/dashboard/","dashboard/index");
get("/dashboard/colleges","dashboard/colleges/index");
get("/dashboard/college/add","dashboard/colleges/add");
get("/dashboard/college/edit","dashboard/colleges/edit");
get("/dashboard/college/view","dashboard/colleges/view");
// its post
post("/dashboard/college/add","dashboard/colleges/add");

// courses
get("/dashboard/{college_id}/courses","dashboard/courses/index");
get("/dashboard/{college_id}/course/add","dashboard/courses/add");
get("/dashboard/course/edit","dashboard/courses/edit");
get("/dashboard/course/view","dashboard/courses/view");
// its post
post("/dashboard/{college_id}/course/add","dashboard/courses/add");

// services
get("/dashboard/services","dashboard/services/index");
get("/dashboard/service/add","dashboard/services/add");
get("/dashboard/service/edit","dashboard/services/edit");
get("/dashboard/service/view","dashboard/services/view");
// its post
post("/dashboard/service/add","dashboard/services/add");

// products
get("/dashboard/{college_id}/{course_id}/products","dashboard/products/index");
get("/dashboard/{college_id}/{course_id}/product/add","dashboard/products/add");
get("/dashboard/product/edit","dashboard/products/edit");
get("/dashboard/product/view","dashboard/products/view");
// its post
post("/dashboard/{college_id}/{course_id}/product/add","dashboard/products/add");

// customers
get("/dashboard/customers","dashboard/customers/index");
get("/dashboard/customer/orders","dashboard/customers/orders");
get("/dashboard/customer/order_details","dashboard/customers/order_details");

// orders
get("/dashboard/orders","dashboard/orders/index");
get("/dashboard/order/invoice","dashboard/orders/invoice");
get("/dashboard/order/payment_history","dashboard/orders/payment_history");
get("/dashboard/order/details","dashboard/orders/order_details");

// blogs
get("/dashboard/blog-category","dashboard/blogs/categories");
get("/dashboard/blog-category-add","dashboard/blogs/category-add");
get("/dashboard/blogs","dashboard/blogs/index");
get("/dashboard/blog/add","dashboard/blogs/blog_add");
get("/dashboard/blog/details","dashboard/blogs/blog_details");

// security
get("/dashboard/admins","dashboard/security/admins/index");
get("/dashboard/roles","dashboard/security/roles/index");
get("/dashboard/permissions","dashboard/security/permissions/index");
get("/dashboard/activity-logs","dashboard/security/activity_logs");

// contacts
get("/dashboard/contacts","dashboard/contacts");

// site settings
get("/dashboard/settings","dashboard/site_settings");
layout_end();