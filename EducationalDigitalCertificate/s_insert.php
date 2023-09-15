<?php
include("db.inc.php");
$name = $_POST['Name'];
$enroll = $_POST['EnrollmentNumber'];
$fname = $_POST['FatherName'];
$mname = $_POST['MotherName'];
$branch = $_POST['Branch'];
$mail = $_POST['EmailID'];
$course = $_POST['course'];
//$tmp_name=$_FILES['Image']['img_name'];
//$img=$_FILES['Image']['Image'];
$pass = $_POST['Password'];
$cpass = $_POST['ConfirmPassword'];
/*$qry="select Email from S_register where Email=$mail";
$data=$conn->query($qry);
	if($data->num_rows>0)
	{
		echo"Email id already exist";
		header("location:register.php");
		
	}
	else
	{*/
	
		if($pass == $cpass)
		{
			
		  $insert = "INSERT INTO `student`(`EnrollmentNumber`, `Name`, `Fathername`, `Mothername`,  `Branch`, `EmailID`,`course`, `Password`, `ConfirmPassword`) VALUES ('$enroll','$name','$fname','$mname ','$branch','$mail','$course','$pass','$cpass')";
		}
		
		if($conn->query($insert)==true)
        {
	      echo"<h1>Registration successfull</h1>"; 
			echo $course;
		  //header("location:fetch_student.php");
        }
		

		else
		{
		 echo $conn->error;								
		}
	
	?>