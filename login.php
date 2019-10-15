<?php
$uname=$_POST['uname'];
$pwd=$_POST['psw'];

include("connection.php");
if (!$conn) 
  {
    echo "Connection failed";
   } 

else
  {
     $sql="SELECT * FROM `login` WHERE username='$uname' and psw='$pwd'";
     $result = mysqli_query($conn,$sql); 
	 if(mysqli_num_rows($result)>0)
	 {
	$rows = mysqli_fetch_array($result); 
	$type=$rows[3];
	
	if($type=='admin')
	{
	header("location:adminhome1.html");
	}
	else if($type=='teacher')
	{
	header("location:techerhome2.html");
	}
	else if($type=="psychiatrist")
	{
	header("location:phome.html");
	}
	else
	{
	?>
	<script>
	alert('invalid user')
	</script>
	<?php
	
	header("refresh:1; url=logpage.html");
	}
	 


        
		
		}
		else
		{
		?>
	<script>
	alert('invalid username or password')
	</script>
	<?php
	header("refresh:1; url=logpage.html");
		}
	}

?>