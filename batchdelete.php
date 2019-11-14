<?php
include("connection.php");

if(isset($_POST['batch']))
	$batch=$_POST['batch'];
	
if(mysqli_query($conn,"delete from student where sbatch='$batch'"))
//header("location:qselect.php");
{
?>
<script>alert("deleted sucessfully");

</script>
<?php
header("refresh:1; url=batchselect.php");
}
?>