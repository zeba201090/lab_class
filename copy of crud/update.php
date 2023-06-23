<?php

$id = $_GET["id"];
$f0 = $_GET["f0"];
$f1 = $_GET["f1"];

require_once('db_conn.php');

$sql = "UPDATE t0 SET f0 = '$f0', f1 = '$f1' WHERE id = $id";

if(mysqli_query($conn, $sql)){
    echo "Record updated successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 
 ?>