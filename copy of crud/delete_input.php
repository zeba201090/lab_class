<?php
$id = $_GET['id'];
$f0 = $_GET['f0'];
$f1 = $_GET['f1'];


 ?>


<h1> DELETE <h1>

<form method=get action=delete.php>
    <input type=hidden name=id value='<?php echo $id; ?>'> <br>
    <input type=text name=f0 value='<?php echo $f0; ?>'> <br>
    <input type=text name=f1 value='<?php echo $f1; ?>'> <br>

    <input type=submit value=Delete>    

</form>
