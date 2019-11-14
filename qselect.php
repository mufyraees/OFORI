<style>

td {  
color:#FFFFFF;
font-size:18px;
    border: 1px solid transparent; /* No more visible border */
    height: 30px; 
    transition: all 0.3s; 
	 /* Simple transition for hover effect */
}
input {
 width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


}
</style>
<?php 
include("connection.php");
include("psychiatristheader.php");
?>

<div style="overflow:scroll; width:1000px; height:545px">

<form method='post' action="qstndelete.php">
  <blockquote>
    <p><br />
    </p>
    <p>&nbsp; </p>
  </blockquote>
  <table width="681" border="1">
	<?php
	if(isset($_POST['type']))
	$type=$_POST['type'];
	
	if(isset($_POST['level']))
	$level=$_POST['level'];
	
	$i=1;
	
	if(isset($_POST['sub']))
	{
	
	//sql1="select * from questions where level='$level' and typeID='$type' ";
	
	
	$result=mysqli_query($conn,"select * from questions where level='$level' and typeID='$type' ");
	while($row=mysqli_fetch_array($result))
	 {
	 
	 ?>
	 <tr>
	 <td width="87"><?php echo $i?></td>
	 
	 
	 <td width="402"><?php echo $row[2]?></td>
	<!-- <td width="136"><a href="qstndelete.php?qid=/<?php //echo $row[0]?>">Delete</a> </td>-->
	<td width="170"><input type="checkbox" name="checkbox[]" value="<?php echo $row['qid']?>"/></td>
	 </tr>
	<?php 
	$i=$i+1;
	 
	 } 
	 }?>
	 <tr>
	 <td colspan="2" align="center"> <input type="submit" name="Sub" value="delete" style="width:130;text-transform:uppercase"/></td>
	 </tr>
</table>
	
</form>
</div>
<?php
include("footer.php");
?>