<?php
$servername = "localhost";
$username = "root"; 
$password = "root"; 
$dbname = "phonebook";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Fail: " . $conn->connect_error);
}
?>
