<?php
$uname=$name=$pass=$course=$sem=$gender=$pno="";
if (isset($_POST["uname"])) 
    $uname= $_POST["uname"];

if (isset($_POST['sname'])) 
    $name= $_POST["sname"];
	
	if (isset($_POST['dob'])) 
    $dob= $_POST["dob"];

if (isset($_POST['pass'])) 
    $pass= $_POST["pass"];

if (isset($_POST['course'])) 
    $course= $_POST["course"];

if (isset($_POST['sem'])) 
    $sem= $_POST["sem"];
	
	if (isset($_POST['smail'])) 
    $mail= $_POST["smail"];
	
	
if (isset($_POST['batch'])) 
    $batch= $_POST["batch"];

if (isset($_POST['gender'])) 
    $gender= $_POST["gender"];

if (isset($_POST['pno'])) 
    $pno= $_POST["pno"];
if (isset($_POST['rpass'])) 
    $rpass= $_POST["rpass"];
if($rpass==$pass)
{
 	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ofori";


    $conn = new mysqli($servername, $username, $password, $dbname);

      if (!$conn) {
          echo "Connection failed";
                  }
        else
            {
           /* $sql1= "select username from login";
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
				
				
			 $type='student';
             $sql = "INSERT INTO login(username,psw,type)VALUES('$uname','$pass','$type')";
			 
			 mysqli_query($conn,$sql);
			 
        
			
$lid=mysqli_insert_id($conn);
 
    
             $sql1 = "INSERT INTO student (logid,sname,scourse,ssem,sgender,sph,sdob,semail,sbatch) VALUES  ('$lid','$name','$course','$sem','$gender','$pno','$dob','$mail','$batch')";

 if (mysqli_query($conn, $sql1))
   {
    echo "<script>alert('New record created successfully!');</script>";
    header("refresh:1; url=techerhome2.html");
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
            header("refresh:1; url=techerhome2.html");
}
?>