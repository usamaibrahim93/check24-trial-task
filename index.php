<?php
/**
 * Application entry point
 *
 */

error_reporting(0);

/** Absolute path to the API directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

define('HOME_URL', $_SERVER['SERVER_NAME']);

require_once 'setup.php';