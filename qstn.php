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
<?php
include("connection.php");

$qid1=$_GET['id'];


$res=mysqli_query($conn,"select *FROM questions INNER JOIN answer2 ON questions.qid=answer2.qid where answer2.userid='$qid1'");
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
<table align="center" border="1">
                                            <thead> 
<?php



if (mysqli_num_rows($res)>1)
{

	while($result=mysqli_fetch_assoc($res))
{
?>
<tr align="center"><th colspan="2"><?php echo $result['qstn'];?></th></tr>
<tr><th>Choice</th><th>Score</th></tr>
<tr><td><?php echo $result['choice1'];?></td><td><?php echo $result['score1'];?></td></tr>
<tr><td><?php echo $result['choice2'];?></td><td><?php echo $result['score2'];?></td></tr></tr> 
<tr><td><?php echo $result['choice3'];?></td><td><?php echo $result['score3'];?></td></tr></tr> 
<tr><td><?php echo "sscore";?></td><td><?php echo $result['score'];?></td></tr>
<tr><td><?php echo "LEVEL";?></td><td><?php echo $result['level'];?></td></tr>

<?php
}
}
?>
