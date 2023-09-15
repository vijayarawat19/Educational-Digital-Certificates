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
                        <legend>Registration Form</legend>
                    <table>
                        <tbody><t<tr>
                                <td><b>Name:</b> </td>
                                <td><input type="text" name="Name" id="input" /></td>
                            </tr>
                            <tr>
                                <td><b>Enrollment Number:</b> </td>
                                <td><input type="text" name="EnrollmentNumber" id="input" /></td>
                            </tr>
                            
						<tr>
                                <td><b>Father Name:</b> </td>
                                <td><input type="text" name="FatherName" id="input" /></td>
                            </tr>
							
                            <tr>
                                <td><b>Mother Name:</b> </td>
                                <td><input type="text" name="MotherName" id="input" /></td>
                            </tr>
							
                            <tr>
                                <td><b>Branch:</b> </td>
                                <td><input type="text" name="Branch" id="input" /></td>
                            </tr>
							
							<tr>
                                <td><b>Email Id:</b> </td>
                                <td><input type="email" name="EmailID" id="input" /></td>
                            </tr>
                                                     
                            <tr>
                                <td><b>Password:</b> </td>
                                <td><input type="password" name="Password" id="input" /></td>
                            </tr>
                            <tr>
                                <td><b>Confirm Password : </b></td>
                                <td><input type="password" name="ConfirmPassword" id="input"/></td>
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
