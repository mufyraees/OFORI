
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

//preg_match – this function is used to perform a pattern match on a string. It returns true if a match is found and false if a match is not found.

/*if(!preg_match("(^[789][0-9]{9}$)",$pno))
{
    echo"<script>alert('Please Enter a valid phone number!');</script>";
            header("refresh:1; url=adminhome1.html");
}
*/
    
if (isset($_POST['rpass'])) 
    $rpass= $_POST["rpass"];
	
if($rpass==$pass)

{


include("connection.php");
if (!$conn) 
  {
    echo "Connection failed";
   } 

else

  {
       /*    $sql1= "select username from login";
            $result = $conn->query($sql1);

           if ($result->num_rows > 0)
              {
               while($row = $result->fetch_assoc()) 
                  {
                    if($row["username"]==$uname)
                     {
                         echo"<script>alert('Username already exist!Please try another!');</script>";
                         header("refresh:1; url=adminhome1.html");
                     }
                 }
            }*/

$re=mysqli_query($conn,"select * from login where username='$uname'");

	 if(mysqli_num_rows($re)>0)
	 {
	 echo"<script>alert('Username already exist!Please try another!');</script>";
                         header("refresh:1; url=adminhome1.html");
	 }
else
{
      $type='psychiatrist';
    $sql = "INSERT INTO login(username,psw,type)VALUES('$uname','$pass','$type')";
	mysqli_query($conn, $sql);
    $lid=mysqli_insert_id($conn);
 
    
             $sql2 = "INSERT INTO psychiatrist(logid,pname,pph,pemail)VALUES ( '$lid','$name','$pno','$mail')";

	
	
    

      if (mysqli_query($conn, $sql2)) 
       {
         echo "<script> alert('New record created successfully!'); </script>" ;
        header("refresh:1; url=adminhome1.html");
      } 
     else 
      {
      echo "Error: " .mysqli_error($conn);
       }
}


mysqli_close($conn);
}
}
else
   {
    echo"<script>alert('Passwords you entered doesnot match!Please try again!');</script>";
            header("refresh:1; url=adminhome1.html");
     }



?>