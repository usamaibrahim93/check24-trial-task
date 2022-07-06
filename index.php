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

require_once 'setup.php';