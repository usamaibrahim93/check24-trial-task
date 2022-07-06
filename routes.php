<?php
/**
 * Routes needing for the application
 */

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

//Index route
get('/', 'index.php');

//Get blog by slug
get('/blog/$slug', 'Controller/Blog.php');

//404 not found route
any('/404','views/404.php');
