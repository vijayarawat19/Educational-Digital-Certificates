<?php
    require_once './member.inc.php';
    $status = 0;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $status=1;
        $roll_number = $_POST['roll_number'];
        $query = "select * from students where roll_number=$roll_number";
        require_once '../db.inc.php';
        $result = mysql_query($query);
    }
?>
<!DOCTYPE html>
<html>

    <head>
        <title>SIS - Member Home</title>
        <link href="../css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php include_once './header.inc.php'; ?>
        <?php include_once './menu.inc.php'; ?>
        <div id="content">
            <div id="left">
                <h2>Search Student Details</h2>
                <hr>
                <br>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <tr>
					Roll Number : 
                    <input type="text" name="roll_number" value="" />
                    <input type="submit" name='submit' value="Show Details" />
                </form>
                <br>
                <hr>
                <?php if ($status == 1) { ?>
                    <?php
                    if (mysql_num_rows($result) == 0) {
                    ?>
                        <h2 style="color: red">The roll number does not exist.</h2>
                    <?php
                    } else {
                        $row = mysql_fetch_array($result);
                        ?>
                        <table>
                            <tr>
                                <td>Roll Number : </td>
                                <td><?php echo $row['roll_number']; ?></td>
                            </tr>
                            <tr>
                                <td>Name : </td>
                                <td><?php echo $row['name']; ?></td>
                            </tr>
                            <tr>
                                <td>Gender : </td>
                                <td><?php echo $row['gender']; ?></td>
                            </tr>
                            <tr>
                                <td>Email ID : </td>
                                <td><?php echo $row['email']; ?></td>
                            </tr>
                            <tr>
                                <td>Mobile Number : </td>
                                <td><?php echo $row['mobile_number']; ?></td>
                            </tr>
                            <tr>
                                <td>Course : </td>
                                <td><?php echo $row['course']; ?></td>
                            </tr>
                        </table>       
                    <?php } ?>            
                <?php } ?>
            </div>
        </div>
        <?php include_once './footer.inc.php'; ?>
    </body>
</html>
