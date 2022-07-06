<?php

require_once ABSPATH . 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/**
 * Load helper files
 */
require_once ABSPATH . 'helper/template.php';