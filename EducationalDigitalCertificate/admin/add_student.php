<?php
    require_once './admin.inc.php';
    $status = 0;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        require_once '../db.inc.php';    
        $roll_number = $_POST['roll_number'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $mobile_number = $_POST['mobile_number'];
        $course = $_POST['course'];    
        $query = "insert into students values($roll_number,'$name','$gender','$email','$mobile_number','$course')";
        $status = 0;
        if(@mysql_query($query)){
            $status = 1;
        }else{
            $status = 2;
        }
        @mysql_close();
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
                <h2>Add Student</h2>
                <hr>
                <form action="add_student.php" method="POST">
                    <table>
                        <tbody>
                            <tr>
                                <td>Roll Number : </td>
                                <td><input type="text" name="roll_number" required /></td>
                            </tr>
                            <tr>
                                <td>Name : </td>
                                <td><input type="text" name="name" required /></td>
                            </tr>
                            <tr>
                                <td>Gender : </td>
                                <td>
                                    <input type="radio" name="gender" value="Male" checked="checked" />Male
                                    <input type="radio" name="gender" value="Female"  />Female
                                </td>
                            </tr>
                            <tr>
                                <td>Email ID : </td>
                                <td><input type="text" name="email" required /></td>
                            </tr>
                            <tr>
                                <td>Mobile Number : </td>
                                <td><input type="text" name="mobile_number" required /></td>
                            </tr>
                            <tr>
                                <td>Course : </td>
                                <td>
                                    <select name="course">
                                        <option>Java</option>
                                        <option>PHP</option>
                                        <option>Android</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right">
                                    <input type="submit" value="Save Record" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <?php if($status==1){ ?>
                    <h2 style="color: green">The record has been saved.</h2>
                <?php } else if($status==2) { ?>
                    <h2 style="color: red">The record has NOT been saved.</h2>
                <?php } ?>
            </div>
        </div>
        <?php include_once './footer.inc.php'; ?>
    </body>
</html>
