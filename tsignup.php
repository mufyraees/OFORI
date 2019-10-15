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

if (isset($_POST['gender'])) 
    $gender= $_POST["gender"];

if (isset($_POST['pno'])) 
    $pno= $_POST["pno"];
if (isset($_POST['rpass'])) 
    $rpass= $_POST["rpass"];
	
	
	
	
	
	
if($rpass==$pass)
{
 	include("connection.php");
      if (!$conn) {
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
			
			
			 $type='teacher';
             $sql = "INSERT INTO login(username,psw,type)VALUES('$uname','$pass','$type')";
			 
			 mysqli_query($conn,$sql);
			 
          /* $lid="SELECT logid FROM login WHERE username='$uname'";
			mysqli_query($conn,$lid);*/
			
$lid=mysqli_insert_id($conn);
 
    
             $sql1 = "INSERT INTO teacher (logid,tname,tcourse,tsem,tgender,tph) VALUES ('$lid','$name','$course','$sem','$gender','$pno')";

 if (mysqli_query($conn, $sql1))
   {
    echo "<script>alert('New record created successfully!');</script>";
    header("refresh:1; url=adminhome1.html");
          }
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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