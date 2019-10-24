
<html>
<style type="text/css">


<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	color: #FF00FF;
	font-weight: bold;
}
-->
</style>

<div align="center">
  <p class="style1"><u>PROFILE</u></p>
  

<?php
session_start();


include("connection.php");
$stlid=55;
//$_SESSION['lid'];

$res=mysqli_query($conn,"select * from student where logid='$stlid'");

if($row=mysqli_fetch_array($res))
 {
?>

 

  <table width="200" border="1">
    <tr>
      <td>NAME</td>
      <td><label>
        <input type="text" name="textfield" VALUE="<?php echo $row[2]?>">
      </label></td>
    </tr>
    <tr>
      <td>GENDER</td>
      <td><input type="text" name="textfield" VALUE="<?php echo $row[3]?>"></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td><input type="text" name="textfield" VALUE="<?php echo $row[6]?>"></td>
    </tr>
    <tr>
      <td>COURSE</td>
      <td><input type="text" name="textfield" VALUE="<?php echo $row[3]?>"></td>
    </tr>
    <tr>
      <td>SEM</td>
      <td><input type="text" name="textfield" VALUE="<?php echo $row[4]?>"></td>
    </tr>
    <tr>
      <td>BATCH</td>
      <td><input type="text" name="textfield" VALUE="<?php echo $row[5]?>"></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><input type="text" name="textfield" VALUE="<?php echo $row[8]?>"></td>
    </tr>
    <tr>
      <td>PHONE</td>
      <td><input type="text" name="textfield" VALUE="<?php echo $row[7]?>"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
<?php }?>