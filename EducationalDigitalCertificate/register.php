<?php
include('db.inc.php');

	?><html>

    <head>
        <title>SIS - Register</title>
        <link href="css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php include_once './header.inc.php';?>
        <?php include_once './menu.inc.php';?>
        <div id="content">
            <div id="left">
                <h2>Registration Form</h2>
                <hr>
                <div id="container_reg">
                <form action="s_insert.php" method="POST" enctype="multipart/from-data">
                    <table>
                        <tbody>
						<td>Name : </td>
                                <td>
                                    <input type="text" name="Name" id="input" />
                                </td>
                            </tr>
							
                            <tr>
                                <td>Enrollment Number : </td>
                                <td>
                                    <input type="text" id="input" name="EnrollmentNumber" />
                                    
                                   
                                </td>
                            </tr>
                                
                               <tr>
                                <td>Father Name : </td>
                                <td>
                                    <input type="text" name="FatherName" id="input"/>
                                </td>
							</tr>
							<tr>
                                <td>Mother Name : </td>
                                <td>
                                    <input type="text" name="MotherName" id="input"/>
                                </td>
							</tr>
								
						 <tr>
                                <td>Email ID : </td>
                                <td>
                                    <input type="email" id="input" name="EmailID" />
                                </td>
                            </tr><tr>

                                <td>Branch : </td>
                                <td>
                                    <select name="Branch"  id="input">
                                    <option >select branch</option>
								<option>Computer science</option>
								<option> Information Tecnology</option>
                               <option> Civil </option>
                               <option> Mechenical</option>
                               <option> Electical</option>
                               	<option> Electronic</option>
                               	</select>
                                </td></tr>
                                <tr>

                                <td>Course : </td>
                                <td>
                                    <select name="course"  id="input">
                                    <option >select Course</option>
								<option>Graduation</option>
								<option>Post Garduation</option>
                               	</select>
                                </td></tr>
                                
								<tr>
                               
                                <td>Password : </td>
                                <td>
                                    <input type="password"  name="Password"id="input"/>
                                </td>
                            </tr>
                            <tr>
                                <td>Confirm Password : </td>
                                <td>
                                    <input type="password"  name="ConfirmPassword"id="input" />
                                </td>
                            </tr>
                            
                            <tr>
                            
                                <td colspan="2" style="text-align: right">
                                    
                                <input type="submit" id="button" value="Register" />
									</td>
                            </tr>
                        </tbody>
                    </table>
                </form>  </div>
                
                            </div>
        </div>
        <?php include_once './footer.inc.php';?>
    </body>
</html>
