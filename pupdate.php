
<?php
session_start();
?>

<?php
$uname=$name=$pass=$pno=$mail=$rpass="";
if (isset($_POST["uname"])) 
    $uname= $_POST["uname"];

if (isset($_POST["pname"])) 
    $name= $_POST["pname"];

if (isset($_POST["pass"])) 
    $pass= $_POST["pass"];

if (isset($_POST["pmail"])) 
    $mail= $_POST["pmail"];

if (isset($_POST["pno"])) 
    $pno= $_POST["pno"];


    
if (isset($_POST['rpass'])) 
    $rpass= $_POST["rpass"];
	
//if($rpass==$pass)
//{
   include("connection.php");
 if (!$conn) 
  {
    echo "Connection failed";
   } 
else
 {
 $lid=$_SESSION["loid"];

 mysqli_query($conn,"update login set username='$uname',psw='$pass' where logid='$lid'");

 if(mysqli_query($conn,"update psychiatrist set pname='$name',pph='$pno',pemail='$mail' where logid='$lid'"))
  {
   echo"<script> alert('sucessfully updated')</scipt>";
   header("refresh:1; url=pview.php");
  }
}

//else
//{
//echo"<script> alert('wrong')</scipt>";
  // header("refresh:1; url=pview.php");
//}
?>