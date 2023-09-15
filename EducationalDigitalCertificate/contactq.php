<?php
include("db.inc.php");
$name = $_POST['Name'];
$mail= $_POST['Email'];
$message = $_POST['Message'];
/*$qry="select Email from S_register where Email=$mail";
$data=$conn->query($qry);
	if($data->num_rows>0)
	{
		echo"Email id already exist";
		header("location:register.php");
		
	}
	else
	{*/
		  $insert = "INSERT INTO `contact`(`Name`, `email`,`message`) VALUES ('$name','$mail','$message')";
		
		if($conn->query($insert)==true)
        {
	      echo"Message sent successfully";  
		  //header("location:fetch_student.php");
        }
		

		else
		{
		 echo $conn->error;								
		}
	
	?>
