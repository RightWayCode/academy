<?php
layout_start('dash');
get("/dashboard/","dashboard/index");
get("/dashboard/colleges","dashboard/colleges/index");
get("/dashboard/college/add","dashboard/colleges/create");
get("/dashboard/college/edit","dashboard/colleges/edit");
get("/dashboard/college/view","dashboard/colleges/view");

// courses
get("/dashboard/courses","dashboard/courses/index");
get("/dashboard/course/add","dashboard/courses/create");
get("/dashboard/course/edit","dashboard/courses/edit");
get("/dashboard/course/view","dashboard/courses/view");

// services
get("/dashboard/services","dashboard/services/index");
get("/dashboard/service/add","dashboard/services/create");
get("/dashboard/service/edit","dashboard/services/edit");
get("/dashboard/service/view","dashboard/services/view");

// products
get("/dashboard/products","dashboard/products/index");
get("/dashboard/product/add","dashboard/products/create");
get("/dashboard/product/edit","dashboard/products/edit");
get("/dashboard/product/view","dashboard/products/view");

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