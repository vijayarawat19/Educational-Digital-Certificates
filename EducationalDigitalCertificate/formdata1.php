
<html>
<body>
<?php 
$t1 =  $_GET['EnrollmentNumber'];
$t2 =  $_GET['Password'];
//echo $_POST["name"]; ?><br>
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
			   
                <form name="search"  action="http://127.0.0.1:5000/process_form" method="post" style="width: 40%;">
                    <fieldset>
                        <legend>Get Hash</legend>
                    <table>
                        <tbody>
                            <tr>
                                <td> Enrollment Number:</b> </td>
                                <td><input type="text" id="field_1"  name="field_1" value="<?php echo $t1?>" />
</td>
                            </tr>
                                <td colspan="2" style="text-align: right">
                                    <input type="submit" value="Get Hash" id="button"/>
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

