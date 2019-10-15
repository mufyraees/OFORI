<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FF0080;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<center>
  <p class="style1">TEACHERS LIST </p>
  <table width="276" border="1">
  <tr>
    <td width="37">Name</td>
    <td width="45">Gender</td>
    <td width="27">Sem</td>
    <td width="44">Course</td>
    <td width="38">Phone</td>
    <td width="24">&nbsp;</td>
    <td width="15">&nbsp;</td>
  </tr>
  <?php
  
  include("connection.php");
	$re=mysqli_query($conn,"select * from teacher");
	while($row=mysqli_fetch_array($re))
	{
  ?>
  <tr>
    
    <td><?php  echo $row[2]?></td>
    <td><?php  echo $row[5]?></td>
    <td><?php  echo $row[4]?></td>
    <td><?php  echo $row[3]?></td>
	<td><?php  echo $row[6]?></td>
	<!--<td><a href="teacheredit.php?id=<?php  echo $row[1]?>">Edit</a></td>-->
    <td><a href="tdelete.php?idd=<?php  echo $row[0]?>">Delete</a></td>
  </tr>
 <?php }?>
</table>
</center>
</body>
</html>
