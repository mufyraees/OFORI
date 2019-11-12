
<html>
<form name="form1" method="post" action="">
  <label for="status">Status
  <select name="status" >
    <option value="no">Pending</option>
    <option value="no">no improvement</option>
    <option value="yes">improved</option>
  </select>
  </label>
  <input type="submit" name="submit" value="Update"/>
  
</form>
<?php
include('connection.php');
if(isset($_POST['submit']))
{
$resultid=$_GET['id'];

if(isset($_POST['status']))
$status=$_POST['status'];
if(mysqli_query($conn,"update result set improvement='$status' where rsltid='$resultid'"))
{?>
<script>alert("updated...");</script>
<?php }}?>



</html>

