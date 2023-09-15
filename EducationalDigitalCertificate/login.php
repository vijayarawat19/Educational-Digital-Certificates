<!DOCTYPE html>
<html>
    <head>
        <title>SIS - Login</title>
        <link href="css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php include_once './header.inc.php';?>
        <?php include_once './menu.inc.php';?>
        <div id="content">
            <div id="left">
               <div id="container_reg">
                <form action="loginq.php" method="POST" style="width: 40%;">
                    <fieldset>
                        <legend>Login Form</legend>
                    <table>
                        <tbody>
                            <tr>
                                <td><b>Enrollment Number:</b> </td>
                                <td><input type="text" name="EnrollmentNumber" id="input" /></td>
                            </tr>
                            <tr>
                                <td><b>Password : </b></td>
                                <td><input type="password" name="Password" id="input"/></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right">
                                    <input type="submit" value="Login" id="button"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </fieldset>
                </form>
                <br>
                <br>
                </div>
                
            </div>
        </div>
        <?php include_once './footer.inc.php';?>
    </body>
</html>
