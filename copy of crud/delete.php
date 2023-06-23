<?php

require_once('db_conn.php');

$id = $_GET["id"];
$sql = "DELETE FROM t0 WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("Location: read.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>