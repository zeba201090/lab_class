<?php
require_once('db_conn.php');
$sql = "SELECT * FROM t0";
 
$result = mysqli_query($conn, $sql);

echo "<table border> \n";
echo "<th> f0 </th> <th> f1</th> <th>delete </th> <th> update </th> \n" ;

while ($rows = mysqli_fetch_array($result)) {
    extract($rows);
    echo "<tr>";
    echo "<td> $f0 </td>";
    echo "<td> $f1 </td>";
    echo "<td> <a href = 'delete_input.php?id=$id&f0=$f0&f1=$f1'> Delete </a> </td>";
    echo "<td> <a href = 'update_input.php?id=$id&f0=$f0&f1=$f1'> Update </a> </td>";
    echo "</tr> \n";
}


   
