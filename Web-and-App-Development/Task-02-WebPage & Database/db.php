<?php

$host = "sql302.infinityfree.com";
$user = "if0_42495944";
$password = "VXh1qRue5DP";
$database = "if0_42495944_smartmethods";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>