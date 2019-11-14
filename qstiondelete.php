<?php
include("connection.php");
include("psychiatristheader.php");

?>
<html>
<style>
td {  
color:#FFFFFF;
font-size:18px;
    border: 1px solid transparent; /* No more visible border */
    height: 30px; 
    transition: all 0.3s; 
	 /* Simple transition for hover effect */
}
select {
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


<form action="qselect.php" method="post">

<table width="722" border="1">
  
	<tr>
	
	 <td width="199"><label><b>Test Level</b></label></td>
                <td width="507">
        
                <select name="level">
  <option value=1>Level 1</option>
  <option value=2>Level 2</option>
  <option value=3>Level 3</option>
</select>                </td>
    </tr>
	
	<tr>
	<td>Test Type</td>
	<td><select name="type">
      <?php
  include("connection.php");
  $re=mysqli_query($conn,"select * from type");
  while($row=mysqli_fetch_array($re))
  {
  
  ?>
      <option value="<?php echo $row[0]?>"><?php echo $row[1]?></option>
      <?php }?>
    </select></td>
	</tr>
	<tr>
	<td colspan="2" align="center"><input type="submit" name="sub" value="SUBMIT" ></td>
	
	
	
	
	</tr>
  </table>
</form>
	</html>
	<?php
	include("footer.php")
	?>