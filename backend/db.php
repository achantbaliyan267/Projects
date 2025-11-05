<?php
// db.php - Database connection and table creation
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Adjust these credentials if needed
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = 'Ayush267@#';
$DB_NAME = 'lead_crm';

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$conn->query("CREATE DATABASE IF NOT EXISTS `$DB_NAME`");
$conn->select_db($DB_NAME);

// Create tables: primary_leads, secondary_leads, tertiary_leads
$conn->query("CREATE TABLE IF NOT EXISTS primary_leads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    mobile VARCHAR(20),
    state VARCHAR(100),
    city VARCHAR(100),
    occurrences INT DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;") or die($conn->error);

$conn->query("CREATE TABLE IF NOT EXISTS secondary_leads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    mobile VARCHAR(20),
    state VARCHAR(100),
    city VARCHAR(100),
    occurrences INT DEFAULT 2,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;") or die($conn->error);

$conn->query("CREATE TABLE IF NOT EXISTS tertiary_leads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    mobile VARCHAR(20),
    state VARCHAR(100),
    city VARCHAR(100),
    occurrences INT DEFAULT 3,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;") or die($conn->error);
?>
