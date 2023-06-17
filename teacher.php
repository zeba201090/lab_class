<?php
 require_once('db_conn.php');
 
$tId = $_POST['teacherId'];
$name = $_POST['name'];
$courseId = $_POST['courseId'];

$sql = "INSERT INTO teacher (teacher_id,name,course_id) VALUES ('$tId','$name','$courseId')";

    if ($conn->query($sql)== TRUE) 
    {
        echo "New record created successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
