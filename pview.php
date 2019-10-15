<div align="center">
  <table width="310" border="1">
    <tr>
      <td width="47">Name</td>
      <td width="67">Phoneno</td>
      <td width="38">Email</td>
      <td width="53">&nbsp;</td>
      <td width="71">&nbsp;</td>
    </tr>
    <tr>
	<?php 
	include("connection.php");
	$re=mysqli_query($conn,"select * from psychiatrist");
	while($row=mysqli_fetch_array($re))
	{
	
	?>
      <td><?php  echo $row[2]?></td>
      <td><?php  echo $row[3]?></td>
      <td><?php  echo $row[4]?></td>
   <!--<td><a href="pedit.php?idd=<?php  echo $row[0]?>">edit</a></td>-->
      <td><a href="pdelete.php?idd=<?php  echo $row[0]?>">delete</a></td>
    </tr>
	<?php }?>
  </table>
</div>
