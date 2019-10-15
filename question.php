<?php

include("connection.php");
if (!$conn) 
  {
    echo "Connection failed";
   } 


else
{

if (isset($_POST["user"])) 
    $user= $_POST["user"];
	
	
if (isset($_POST["test"])) 
    $test= $_POST["test"];
	
	if (isset($_POST["level"])) 
    $level= $_POST["level"];
	
	if (isset($_POST["qstn"])) 
    $qstn= $_POST["qstn"];
	
	if (isset($_POST["choice1"])) 
    $choice1= $_POST["choice1"];
	
	if (isset($_POST["choice2"])) 
    $choice2= $_POST["choice2"];
	
	if (isset($_POST["choice3"])) 
    $choice3= $_POST["choice3"];
	
	if (isset($_POST["m1"])) 
    $m1= $_POST["m1"];
	
	if (isset($_POST["m2"])) 
    $m2= $_POST["m2"];
	
	if (isset($_POST["m3"])) 
    $m3= $_POST["m3"];
	
	
	
	
	$sql="insert into qstn(qstn,testype,level,usertype) values('$qstn','$test','$level','$user')";
	
	
	if (mysqli_query($conn, $sql)) 
       {
         echo "<script> alert('New record created successfully!'); </script>" ;
        header("refresh:1; url=phome.html");
      } 
     else 
      {
      echo "Error: " .mysqli_error($conn);
       }
	   
	   $lid=mysqli_insert_id($conn);
	   
	   $sql1="insert into answer(qno,choice1,m1,choice2,m2,choice3,m3) values('$lid','$choice1','$m1','$choice2','$m2','$choice3','$m3')";
	
	
	if (mysqli_query($conn, $sql1)) 
       {
         echo "<script> alert('New record created successfully!'); </script>" ;
        header("refresh:1; url=phome.html");
      } 
     else 
      {
      echo "Error: " .mysqli_error($conn);
       }
	
	
	}#frstelse