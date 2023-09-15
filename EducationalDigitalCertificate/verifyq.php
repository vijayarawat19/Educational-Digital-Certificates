<html>  
<?php
include("db.inc.php");
$mail=$_POST['EnrollmentNumber'];
$login="select * from student where hashcode = '$mail' " ;
$result=$conn->query($login);
//if($result ->num_rows>0)
	if (mysqli_num_rows($result) == 1)
{
	session_start();
	$data=$result->fetch_object();
	$d1= $_SESSION['EnrollmentNumber']=$data->EnrollmentNumber;
	$d2= $_SESSION['Name'] = $data->Name ;
	$d3 = $_SESSION['Branch'] = $data->Branch;
	$d4= $_SESSION['Fathername']=$data->Fathername;
	$d5= $_SESSION['Mothername']=$data->Mothername;
	$d6= $_SESSION['EmailID']=$data->EmailID;
	
	
	//header('location:formdata1.php');
	//print_r('hello');
	//$t1 =  $_POST['t1'];
//$t2 =  $_POST['t2'];
//header('Location:verify2.html');
?><head>
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
                        <legend>Student details</legend>
                    <table>
                        <tbody>
                            <tr>
                                <td><b>Enrollment Number:</b> </td>
                                <td><input type="text" name="EnrollmentNumber" id="input" value="<?php echo $d1?>" /></td>
                            </tr>
                            <tr>
                                <td><b>Name: </b></td>
                                <td>
								<input type="text" name="name" id="input" value="<?php echo $d2?>" /></td>
                            </tr>
							<tr>
                                <td><b>Branch: </b></td>
                                <td>
								<input type="text" name="name" id="input" value="<?php echo $d3?>" /></td>
                            </tr>
                            <tr>
							<tr>
                                <td><b>Father Name: </b></td>
                                <td>
								<input type="text" name="name" id="input" value="<?php echo $d4?>" /></td>
                            </tr>
                            
                                <td><b>Mother Name: </b></td>
                                <td>
								<input type="text" name="name" id="input" value="<?php echo $d5?>" /></td>
                            </tr>
                            <tr>
                                <td><b>Email Id: </b></td>
                                <td>
								<input type="text" name="name" id="input" value="<?php echo $d6?>" /></td>
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
<?php
}
else
{
	echo"<h1>Invalid Hashcode</h1>";
}
?>  
