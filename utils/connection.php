<?php

$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="root";
$dbname="test_epasal_db";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();


$query = "SELECT *  FROM tbl_users WHERE email = \"aashishmaharjan2001@gmail.com\" AND password_hash = \"secretpass\"";

// echo "<pre>"; 

// if ($stmt = $con->prepare($query)) {
//     $stmt->execute();
//     $result = $stmt->get_result();
//     print_r($result);
//     print_r($result->fetch_assoc());
//     print_r($result->fetch_all(MYSQLI_ASSOC));
// }

// echo "</pre>";

// $query = "INSERT INTO tbl_users (fname, lname, email, contact_no, password_hash) VALUES (\"Jane\", \"Smith\", \"janesmith@gmail.com\", \"9810154589\", \"secretpass\")";


// if ($stmt = $con->prepare($query)) {
//     $stmt->execute();
//     $stmt->bind_result($field1, $field2);
//     while ($stmt->fetch()) {
//         //printf("%s, %s\n", $field1, $field2);
//     }
//     $stmt->close();
// }




?>