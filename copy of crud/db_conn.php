<?php

$conn = new mysqli("localhost", "root", "", "db0");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else echo "Connected successfully";

?>