<?php
require_once('db_conn.php');

$title = $_POST['Title'];
$courseId = $_POST['courseId'];

$sql = "INSERT INTO course (Title,course_id) VALUES ('$title','$courseId')";

    if ($conn->query($sql)== TRUE) 
    {
        echo "New record created successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }