
<?php
session_start();
?>

<?php
$uname=$name=$pass=$course=$sem=$gender=$pno="";
if (isset($_POST["uname"])) 
    $uname= $_POST["uname"];

if (isset($_POST['tname'])) 
    $name= $_POST["tname"];

if (isset($_POST['pass'])) 
    $pass= $_POST["pass"];

if (isset($_POST['course'])) 
    $course= $_POST["course"];

if (isset($_POST['sem'])) 
    $sem= $_POST["sem"];

//if (isset($_POST['gender'])) 
  //  $gender= $_POST["gender"];

if (isset($_POST['pno'])) 
    $pno= $_POST["pno"];
if (isset($_POST['rpass'])) 
    $rpass= $_POST["rpass"];
	


 
 
 
   include("connection.php");
 if (!$conn) 
  {
    echo "Connection failed";
   } 
else
 {
 $lid=$_SESSION["loid"];

 mysqli_query($conn,"update login set username='$uname',psw='$pass' where logid='$lid'");

 if(mysqli_query($conn,"update teacher set tname='$name',tph='$pno',tsem='$sem',tcourse='$course' where logid='$lid'"))
  {
   echo"<script> alert('sucessfully updated')</scipt>";
   header("refresh:1; url=teacherview.php");
  }
}

//else
//{
//echo"<script> alert('wrong')</scipt>";
  // header("refresh:1; url=pview.php");
//}
?>