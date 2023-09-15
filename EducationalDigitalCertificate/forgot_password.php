<?php
    $template=1;
    $email = '';
    $question = '';
    $error = 0;
    $str = '';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if($_POST['submit']==1){
            $email = $_POST['email'];
            $query = "select * from users where email='$email'";
            require_once './db.inc.php';
            $result = mysql_query($query);
            if(mysql_num_rows($result)==1){
                $row = mysql_fetch_assoc($result);
                $question = $row['question'];
                $template = 2;
            }else{
                $error = 1;
                $template = 1;
            }
        }
        else if($_POST['submit']==2){
            $email = $_POST['email'];
            $answer = $_POST['answer'];
            $query = "select * from users where email='$email'";
            require_once './db.inc.php';
            $result = mysql_query($query);
            if(mysql_num_rows($result)==1){
                $row = mysql_fetch_assoc($result);
                $question = $row['question'];
                $db_answer = $row['answer'];
                if(strtolower($answer)==  strtolower($db_answer)){
                    $str = str_shuffle('ADKMldfgiort876$&_@E');
                    $str = substr($str, 0, 10);
                    $password = sha1($str);
                    $query = "update users set password='$password' where email='$email'";
                    mysql_query($query);
                    $template = 3;
                    
                }else{
                    $error = 2;
                    $template = 2;
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SIS - Forgot Password</title>
        <link href="css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php include_once './header.inc.php';?>
        <?php include_once './menu.inc.php';?>
        <div id="content">
            <div id="left">
                <?php if($template==1) { ?>
                <form action="forgot_password.php" method="POST" style="width: 40%;">
                    <fieldset>
                        <legend>Forgot Password</legend>
                    <table>
                        <tbody>
                            <tr>
                                <td>Email ID : </td>
                                <td><input type="text" name="email" value="" required /></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right">
                                    <input type="submit" value="Submit" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </fieldset>
                    <input type="hidden" name="submit" value="1" />
                </form>
                <?php if($error==1) { ?>
                <h2 class="error">The Email ID is Incorrect</h2>
                <?php } ?>
                <?php } ?>
                <?php if($template==2) { ?>
                <form action="forgot_password.php" method="POST" style="width: 40%;">
                    <fieldset>
                        <legend>Forgot Password</legend>
                    <table>
                        <tbody>
                            <tr>
                                <td>Email ID : </td>
                                <td><input type="text" name="email" value="<?php echo $email;?>" required /></td>
                            </tr>
                            <tr>
                                <td>Question : </td>
                                <td><input type="text" name="question" value="<?php echo $question;?>" required /></td>
                            </tr>
                            <tr>
                                <td>Answer : </td>
                                <td><input type="text" name="answer" value="" required /></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right">
                                    <input type="submit" value="Submit" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </fieldset>
                    <input type="hidden" name="submit" value="2" />
                </form>
                <?php if($error==2) { ?>
                <h2 class="error">The given Answer is Incorrect</h2>
                <?php } ?>
                <?php } ?>
                <?php if($template==3) { ?>
                <h2>Your password has been Reset.</h2>
                <h3>An email has been sent to your email ID. : <?php echo $str;?></h3>
                <br>
                Click <a href="login.php">here</a> to Login.
                <?php } ?>
            </div>
        </div>
        <?php include_once './footer.inc.php';?>
    </body>
</html>
