<?php
require_once './member.inc.php';
$status = 0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    $current_password = sha1($_POST['current_password']);
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_SESSION['email'];
    require_once '../db.inc.php';
    $query = "select * from users where email='$email' and password='$current_password'";
    $result = mysql_query($query);
    if(mysql_num_rows($result)==0){
        $status = 1;
    }
    else if($new_password!=$confirm_password){
        $status = 2;
    }
    else {
        $password = sha1($new_password);
        $query = "update users set password='$password' where email='$email'";
        mysql_query($query);
        $status = 3;
    }
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
                <form action="change_password.php" method="POST" style="width: 40%;">
                    <fieldset>
                        <legend>Change Password</legend>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Current Password : </td>
                                    <td><input type="password" name="current_password" required /></td>
                                </tr>
                                <tr>
                                    <td>New Password : </td>
                                    <td><input type="password" name="new_password" required /></td>
                                </tr>
                                <tr>
                                    <td>Confirm Password : </td>
                                    <td><input type="password" name="confirm_password" required /></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: right">
                                        <input type="submit" value="Change Password" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                </form>
                <?php if ($status == 1) { ?>
                    <h2 class="error">The Current Password is Incorrect</h2>
                <?php } else if ($status == 2) { ?>
                    <h2 class="error">The Passwords do not match.</h2>
                <?php } else if ($status == 3) { ?>
                    <h2 style="color: green;">The Password has been changed.</h2>
                <?php } ?>
            </div>
        </div>
        <?php include_once './footer.inc.php'; ?>
    </body>
</html>
