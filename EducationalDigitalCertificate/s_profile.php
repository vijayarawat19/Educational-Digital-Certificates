<?php
include('db.inc.php');

	?>
	<html>

    <head>
        <title>SIS - Register</title>
        <link href="css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body><div id="content">
            <div id="left">
        <div id="center">
        
         <div id="header">
    <p id="welcome">
        <?php echo 'Welcome ';?>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="s_logout.php">Logout</a>
    </p>
    <h1>Educational Digital Certificate</h1>
    <h2>BY Himangi,Deepak,Sagar,Vijaya</h2>
</div>
<?php include_once './menu.inc.php';
       
session_start();
if(!empty($_SESSION['Name']))
{

	echo "</br><b> hello  " .$_SESSION['Name'];
echo "</br></br>Enrollment number:- ".$_SESSION['EnrollmentNumber'];
echo "</br></br>Branch :-     "  . $_SESSION['Branch'];
echo "</br></br>Email Id:- "  .  $_SESSION['Email'];
echo "</br></br>Father's Name:-"  . $_SESSION['F_name'];
echo "</br></br>Gender:-"  . 	$_SESSION['gender'];
echo "</br></br>DAte of birth:-"  . $_SESSION['dob'];
echo "</br></br>Mother's Name:-"  . $_SESSION['M_name'];
echo "</br></br>10 percentage%:-"  .  $_SESSION['tenth'];
echo "</br></br>12 percentage%:-"  .  $_SESSION['inter'];
echo "</br></br>Address:-"  . $_SESSION['Address'];
echo"</br></br></br></br></br></br></br></br> ";	
}
 include_once './footer.inc.php';

?>
<table>

<tr>
<th><?php include_once './menu.inc.php';
       
session_start();
if(!empty($_SESSION['Name']))
{ $_SESSION['Name']; }?></th>

</tr>
</table>
</body>
</html>