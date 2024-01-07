<?php
// Local DB
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test_epasal_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


session_start();

// Debugging func
function dd($myvar) {
    $arrayString = print_r($myvar, true);
    echo "<pre>{$arrayString}</pre>";
}
?>