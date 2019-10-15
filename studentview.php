<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FF00FF;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<center>
  <p class="style1">STUDENT DETAILS </p>
  <table width="200" border="1">
  <tr>
    <td>Name</td>
    <td>Gender</td>
    <td>DOB</td>
    <td>Sem</td>
    <td>Course</td>
    <td>Batch</td>
    <td>Phone</td>
    <td>Email</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
   <?php
  
  include("connection.php");
	$re=mysqli_query($conn,"select * from student");
	while($row=mysqli_fetch_array($re))
	{
  ?>
  
  <tr>
    <td><?php  echo $row[2]?></td>
    <td><?php  echo $row[3]?></td>
    <td><?php  echo $row[7]?></td>
    <td><?php  echo $row[5]?></td>
    <td><?php  echo $row[4]?></td>
    <td><?php  echo $row[6]?></td>
    <td><?php  echo $row[8]?></td>
    <td><?php  echo $row[9]?></td>
   <!-- <td><a href="#">Edit</a></td>-->
    <td><a href="sdelete.php?idd=<?php echo $row[0]?>">Delete</a></td>
  </tr>
  <?php } ?>
</table>
</center>
</body>
</html>
