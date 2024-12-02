<?php
$host = 'mysql';
$db = 'testdb';
$user = 'testuser';
$pass = 'testpassword';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to MySQL!";
?>