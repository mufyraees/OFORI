<html>
<head>

<!--table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}-->

<style type=”text/css”>
.special table{color:red;}
.special th{color:green;background-color:white;}
.special tr{width:400px;}
.special td{width:100px;}
.special tr:nth-child(even){background-color#geen;}
.special tr:nth-child(odd){background-color:#red;}
</style>


</head>
<body>

<center>
  <p class="style1">STUDENT DETAILS </p>
  <table width="200" border="1">
  <tr>
    <th>Name</th>
    <th>Gender</th>
    <th>DOB</th>
    <th>Sem</th>
    <th>Course</th>
    <th>Batch</th>
    <th>Phone</th>
    <th>Email</td>
    <th>&nbsp;</th>
    <th>&nbsp;</td>
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
