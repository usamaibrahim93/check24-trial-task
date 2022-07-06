<?php
/**
 * Routes needing for the application
 */

require_once '../index.php';
require_once ABSPATH . 'router/router.php';

//Index route
get('/', 'Controller/Index.php');

//DB Setup
get('/dbsetup', 'dbsetup.php');

//Get blog by slug
get('/blog/$slug', 'Controller/Blog.php');

//404 not found route
any('/404','views/404.php');
