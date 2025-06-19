<?php
$host = "127.0.0.1";    // or "localhost"
$user = "root";
$pass = "";             // or 'system' if you set one
$dbname = "portfolio_db";
$port = 3307;           // match your MySQL port

$conn = new mysqli($host, $user, $pass, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
