<?php
include("connection.php");
$lid=$_GET['idd'];
if(mysqli_query($conn,"delete from student where logid='$lid'"))
{
   echo"<script> alert('sucessfully deleted')</scipt>";
   header("refresh:1; url=studentview.php");
}
?>