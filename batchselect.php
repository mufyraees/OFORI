<?php
include("adminheader.php");
?>
<html>
<table width="200" border="1">
<form name="form1" method="post" action="batchdelete.php">
  <tr>
    <td>Batch</td>
    <td>
      <label>
        <input type="text" name="batch">
        </label>
    
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center"><label>
      <input type="submit" name="Submit" value="DELETE" >
    </label></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
<?php
include("footer.php");
?>
</html>
