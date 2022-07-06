<?php

require_once ABSPATH . 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/**
 * Load helper files
 */
require_once ABSPATH . 'helper/template.php';

/**
 * Load Database connection
 */
require_once ABSPATH . 'database/Database.php';

/**
 * Load Models
 */
require_once ABSPATH . 'Model/Blog.php';