<?php
$serverName = "localhost";
$userName = "";
$password = "";
$dbName = "employee_data";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
}
