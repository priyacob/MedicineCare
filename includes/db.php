<?php
// Ensure no whitespace before this line
session_start();
$con = mysqli_connect("localhost", "root", "", "medicinecare");

if (!$con) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>
