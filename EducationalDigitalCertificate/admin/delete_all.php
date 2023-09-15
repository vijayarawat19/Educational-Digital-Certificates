<?php
    $rno = $_POST['rno'];
    require_once '../db.inc.php';
    foreach ($rno as $value) {
        $query = "delete from students where roll_number='$value'";
        mysql_query($query);
    }
    header('Location: list_students.php');
?>

