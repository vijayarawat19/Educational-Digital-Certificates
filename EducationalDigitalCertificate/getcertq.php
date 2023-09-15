<html>  
<?php
include("db.inc.php");
$mail=$_POST['EnrollmentNumber'];
$Pass=$_POST['Password'];
$login="select * from student where EnrollmentNumber = '$mail'  and Password='$Pass' " ;
$result=$conn->query($login);
if($result ->num_rows>0)
{
	
	session_start();
	$data=$result->fetch_object();

	$d1= $_SESSION['EnrollmentNumber']=$data->EnrollmentNumber;
	$d2= $_SESSION['Name'] = $data->Name ;
	$d3 = $_SESSION['Branch'] = $data->Branch;
	$d4= $_SESSION['Fathername']=$data->Fathername;
	$d5= $_SESSION['Mothername']=$data->Mothername;
	$d6= $_SESSION['EmailID']=$data->EmailID;
	$d7= $_SESSION['hashcode']=$data->hashcode;
	$d8= $_SESSION['course']=$data->course;
	
	
	//header('location:formdata1.php');
	//print_r('hello');
	//$t1 =  $_POST['t1'];
//$t2 =  $_POST['t2'];
//header('Location:verify2.html');
?><head>
    <title>SIS - Login</title>
        <link href="css/default.css" rel="stylesheet" type="text/css" />
    
<style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
            }
			input[type=text] {
			padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			font-family: 'Times New Roman';
			outline: none;
			height:30px;
			border: 0px solid #ddd;

			text-transform: capitalize;
			}
            body {
                color: black;
                display: table;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
            }
            .container {
                border: 20px solid tan;
                width: 750px;
                height: 563px;
                display: table-cell;
                vertical-align: middle;
            }
            .logo {
                color: tan;

            }
			.nobr 
			{
			white-space: nowrap 
			}

            .marquee {
                color: tan;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
            }
            .reason {
                margin: 10px;
            }
			img {
    max-width: 100%;
    max-height: 100%;
}

.portrait {
    height: 150px;
    width: 150px;
}

.topright {
  position: absolute;
  top: 38px;
  right: 30px;
  font-size: 28px;
  color: tan;
            
}
.reasonnew{
	fontsize: 10px;
	color:tan;
	right:150;
}

        </style>
		
    
    
    </head>
    <body>
	    <?php include_once './header.inc.php';?>
        <?php include_once './menu.inc.php';?>
    
        <div class="container">
		<div class="portrait">
    <img src="download.jpg">
</div>

		    <div class="topright">
			
                Govind Ballabh Pant Institute of Engineering </br>and Technology
            </div>
<div class="reason">
<input style="font-size:10px;width:100%;top:130;left:10;" type="text" name="name" id="input"  value="<?php echo $d7?>" /> 
</div>
			
            <div class="marquee">
                Certificate of Completion
            </div>

            <div class="assignment">
                This certificate is presented to the son/daughter of Mr.<td class=nobr><input style="font-size:20px;font-family: 'Brush Script MT', serif;width:20%;" type="text" name="name" id="input"  value="<?php echo $d4?>" /></td><td class= nobr> and Mrs.<input style="font-size:20px;font-family: 'Brush Script MT',serif;width:20%;" type="text" name="name" id="input"  value="<?php echo $d5?>" /> having enrollment number as <input style="font-size:20px;text-align:left;width:20%;color:tan;" type="text" name="name" id="input"  value="<?php echo $d1?>" /> 
		for the completion of <input style="font-size:20px;text-align:left;width:20%;" type="text" name="name" id="input"  value="<?php echo $d8?>" /> course provided by our school of engineering.
            </td></div>

            <div class="person">
                <input style="font-size:30px;text-align:center;font-family: 'Brush Script MT', cursive; color:tan;" type="text" name="name" id="input" size="23" value="<?php echo $d2?>" />
            </div>

            <div class="reason">
					In the field of Engineering and Technology.
			</div>
			<div style="margin:20"class="reasonnew"><p style="font-size:10px;text-align:left;left:20">Verify this certificate at:</p>
<a style="font-size:10px;margin:0;display: block; float:left;text-align: center;" href="verifyq1.html" align="left">verifyq1.html</a></div>
<div class="reasonnew"><p style="font-size:20px;text-align:right;right:50;margin-right:150">Principal</p></br>
<hr style="width:28%;text-align:right;margin-right:10"></div>
        </div>
    </body>
</html>
        
<?php
}
else
{
	echo"<h1>Invalid Hashcode</h1>";
}
?>  
