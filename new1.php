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


$res=mysqli_query($conn,"select student.sname,result.* from result JOIN student ON result.st_id=student.logid ");

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
                             <!-- Tab panes -->
                             <div class="tab-content">
                                    <div class="tab-pane container active" id="home">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Sl.no.</th>
                                                    <th>SName</th>
                                                    <th>SScore</th>
                                                    <th>SDate</th>
                                                    <th>Tscore</th>
                                                    <th>TDate</th>
						    <th></th>
                                                </tr>
                                            </thead>
<?php
$i=1;

if (mysqli_num_rows($res) > 0)

{
	
	while($result=mysqli_fetch_assoc($res))
{

?>

<tr><td><?php echo $i;?></td><td><?php echo $result['sname'];?></td><td><?php echo $result['score']?></td>
<td><?php echo $result['sdate'];?></td>

<td><?php echo $result['tscore'];?></td>
<td><?php echo $result['tdate'];?></td><td><a href="new2.php?id=<?php echo $result['st_id']?>">VIEW</a></td></tr>

<?php
$i=$i+1;
}
}
?>
