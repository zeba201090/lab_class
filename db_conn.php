<?php 

$conn = new mysqli ("localhost", "root", "", "Spring2020_Assignment");

if($conn-> connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    } 
    else 
    {
        echo "Connected successfully";
    }
?>
