<?php
$host = "localhost";
$user = "root"; // Change as needed
$pass = "";     // Change as needed
$dbname = "address_book";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
