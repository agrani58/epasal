<?php
// Include utils file
require(__DIR__ . "/../utils/utils.php");

// Local DB
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "test_epasal_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start the current session
session_start();

// Custom error handler function for warnings
function custom_warning_handler($errno, $errstr, $errfile, $errline) {
    echo "<span style='display: none;'>Warning: $errstr\n</span>";
    // You can also log the warning to a file or perform other actions
}

// Set custom warning handler
set_error_handler('custom_warning_handler', E_WARNING);
