<?php
$f0 = $_GET["f0"];
$f1 = $_GET["f1"];
 
require_once('db_conn.php');
   $sql = "INSERT INTO t0 VALUES ( '', '$f0', '$f1' )";
    if (mysqli_query($conn, $sql)) {
        echo "Record inserted:<br> f0 = $f0 <br> f1 = $f1";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

 
 
 ?>
