<?php
    require_once './admin.inc.php';
    $query = "select * from students";
    require_once '../db.inc.php';
    $result = mysql_query($query);
?>
<!DOCTYPE html>
<html>

    <head>
        <title>SIS - Member Home</title>
        <link href="../css/default.css" rel="stylesheet" type="text/css" />
         <style>
            table{
                width: 100%;
            }
            th,td{
                text-align: center;
                padding: 5px;
            }
            table,th,td{
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>        
    </head>
    <body>
        <?php include_once './header.inc.php';?>
        <?php include_once './menu.inc.php';?>
        <div id="content">
            <div id="left">
                <h2>List of All Students</h2>
                <hr>
                <?php
                    if(mysql_num_rows($result)==0){
                ?>
                <h2 style="color: red">There are no records to Display</h2>
                <?php } else { ?>
                <form action="delete_all.php" method="POST">
                
                <table>
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>Roll Number</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Email ID</th>
                                <th>Mobile Number</th>
                                <th>Course</th>
                                <th>Edit / Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                           while ($row = mysql_fetch_assoc($result)) { 
                        ?>
                            <tr>
                                <td><input type="checkbox" name="rno[]" value="<?php echo $row['roll_number'];?>" /></td>
                                <td><?php echo $row['roll_number'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['gender'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['mobile_number'];?></td>
                                <td><?php echo $row['course'];?></td>
                                <td>
                                    <a href="edit_student.php?roll_number=<?php echo $row['roll_number'];?>"><img src="../images/edit.png" title="Edit Record" alt=""/></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a onclick="return confirm('The record will be deleted.')" href="delete_student.php?roll_number=<?php echo $row['roll_number'];?>"><img src="../images/delete.png" title="Delete Record" alt=""/></a>
                                </td>
                            </tr>
                        <?php } ?>    
                        </tbody>
                    </table> 
                    <p style="text-align: left">
                        <input type="submit" value="Delete All" />
                    </p>
                    </form>
                <?php } ?>        
            </div>
        </div>
        <?php include_once './footer.inc.php';?>
    </body>
</html>
