<?php
    require_once './admin.inc.php';
?>
<!DOCTYPE html>
<html>

    <head>
        <title>SIS - Member Home</title>
        <link href="../css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php include_once './header.inc.php';?>
        <?php include_once './menu.inc.php';?>
        <div id="content">
            <div id="left">
                <a href="add_student.php">Add Student</a>
                <br>
                <br>
                <a href="list_students.php">List Students</a>
            </div>
        </div>
        <?php include_once './footer.inc.php';?>
    </body>
</html>
