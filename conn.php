<?php

$conn = new mysqli('localhost', 'root', '', 'gwdatabase');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>