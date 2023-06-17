<?php
require_once('db_conn.php');

$sql = "SELECT * FROM course";

$result = $conn->query($sql);
?>

<table border="1">
    <tr>
        <th>Course ID</th>
        <th>Title</th>
        <th> edit <th>
    </tr>
    <?php
    while($row = $result->fetch_assoc()) 
    {
        ?>
        <tr>
            <td><?php echo $row['course_id']; ?></td>
            <td><?php echo $row['Title']; ?></td>
            <td> <button href='editCourse'> edit </button> </td>
        </tr>

        <?php
    }
    ?>
    </table>

