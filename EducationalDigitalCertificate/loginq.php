<?php
include("db.inc.php");
$mail=$_POST['EnrollmentNumber'];
$Pass=$_POST['Password'];
$login="select * from student where EnrollmentNumber = '$mail'  and Password='$Pass' " ;
$result=$conn->query($login);

$log="select hashcode from student where EnrollmentNumber = '$mail'  and Password='$Pass' " ;
$resultnew=$conn->query($log);

if($resultnew ->num_rows>0)
{
header('location:formdata1.php?EnrollmentNumber='.$mail.'&Password='.$Pass);
}
else
{//echo "exist";
	$log1="select hashcode from student where EnrollmentNumber = '$mail'  and Password='$Pass' " ;
	$res=$conn->query($log1);
	//echo $res;
		if($res ->num_rows>0)
{
		$data=$res->fetch_object();
			echo $_SESSION['hashcode']=$data->hashcode;
			
		}

}

/*
if($result ->num_rows>0)
{
	session_start();
	$data=$result->fetch_object();
	$_SESSION['EnrollmentNumber']=$data->EnrollmentNumber;
	$_SESSION['Name'] = $data->Name;
	$_SESSION['Branch'] = $data->Branch;
	$_SESSION['F_name']=$data->F_name;
	$_SESSION['M_name']=$data->M_name;
	$_SESSION['Email']=$data->Email;
	
	//header('location:formdata1.php');
	print_r('hello');
	//$t1 =  $_POST['t1'];
//$t2 =  $_POST['t2'];
//header('Location: http://yoursite.com/page2.php?t1='.$t1.'&t2='.$t2);

}

else
{
	echo"invalid enrollment number or password";
}*/
?>
