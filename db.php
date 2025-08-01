<?php
$host = "localhost:3306";
$user = "root";
$pass = "12345";
$dbname = "facebook_clone";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>