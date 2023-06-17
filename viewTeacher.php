<?php
require_once('db_conn.php');

$sql = "SELECT * FROM teacher";

$result = $conn->query($sql);

<table border="1">
    <tr>
        <th>Teacher ID</th>
        <th>Name</th>
        <th>Course ID</th>
    </tr>
    <?php
    while($row = $result->fetch_assoc()) 
    {
        ?>
        <tr>
            <td><?php echo $row['teacher_id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['course_id']; ?></td>
        </tr>
        <?php
    }
    ?>

</table>


?>