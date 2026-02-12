<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "finance_tracker_2_0"; // same as created above

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
?>