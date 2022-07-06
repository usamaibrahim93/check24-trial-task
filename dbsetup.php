<?php
error_reporting(1);

require_once ABSPATH . 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/**
 * Load Database connection
 */
require_once ABSPATH . 'database/Database.php';

try {
    $db = new Database();
    $users = "CREATE TABLE users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(100) NOT NULL,
        password VARCHAR(255) NOT NULL,
        created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";

    $blog = "CREATE TABLE blog (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        slug VARCHAR(200) NOT NULL,
        title VARCHAR(30) NOT NULL DEFAULT '',
        content LONGTEXT NOT NULL,
        author INT(6) NOT NULL,
        thumbnail VARCHAR(200) DEFAULT '',
        created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";        
    
    $db->execute( $blog );
    $db->execute( $blog );

    echo 'Tables created successfully';

} catch (\Exception $e) {
    echo 'Error creating tables: ' . $e->getMessage();
}