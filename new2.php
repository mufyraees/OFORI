<!DOCTYPE html>
<html>

    <head>
            <title></title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
<body>
<?Php
	include("connection.php");
	$id=$_GET['id'];

	$res=mysqli_query($conn,"select * from result INNER JOIN student ON result.st_id=student.logid where student.logid='$id'");
$res1=mysqli_query($conn,"select * from answer2");
if (mysqli_num_rows($res1) > 0)
{

	while($result1=mysqli_fetch_assoc($res1))
{
$p=$result1['qid'];
$dte=$result1['date'];
}
}
?>

 <table border=1 style="width:50%" border-spacing: 5px align="center">
<div class="container">
            <div class="row border-3">
            <div class="col-12 p-0 card mt-5">
            <div class="card-header">
            <h2 class="text-center mb-5">OFORI</h2>
            <h3 class="text-center">    If you want to be happy . Be</h3>
</div>
<div class=" card-body border border-secondary">
<div class="col-sm-9 tab-body">
                             
<div class="tab-content">
<div class="tab-pane container active" id="home">
<table class="table table-borderless">
                                            <thead> 
<?php

if (mysqli_num_rows($res) > 0)
{

	while($result=mysqli_fetch_assoc($res))
{
?>
<form action="" method="post">
 <tr>                                                   
<tr> <th>SName</th><td><?php echo $result['sname'];?></td>
<tr><th>SScore</th><td><?php echo $result['score'];?></td><td><a href="qstn.php?id=<?php echo $id;?>">VIEWQSTN
</a></td></tr>
<tr><th>SDate</th><td><?php echo $result['sdate'];?></td></tr>
<tr><th>Tscore</th><td><?php echo $result['tscore'];?></td></tr>
					
<tr><th>TDate</th><td><?php echo $result['tdate'];?></td></tr>
<tr> <th><br>Suggestions</br></th><td><textarea name="comment" placeholder="suggestions" >
</textarea>                                               
<input type="submit" name="submit" value="replay"  ></td></tr>
<tr><th><br>teacher</br>
<textarea cols="50" rows="5">
<?php
echo $result['tcomm']
?>

</textarea></th></tr>

<?php

if(isset($_POST['submit']))
{

$sug=$_POST["comment"];
mysqli_query($conn,"update result SET pcomm='$sug' where st_id='$id'");

}

}
}
?>
</form>


