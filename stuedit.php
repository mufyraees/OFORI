
<?php
// Start the session
session_start();
?>


<html>
    <head>
        <style>
            input[type=text] {
    width: 15%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=text], select {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

}
input[type=number]
        {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 40%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=email] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit]:hover {
    background-color: #45a049;
}
/* Set a style for all buttons */
button {
    background-color: deeppink;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    text-transform: uppercase;
    
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: 20s%;
    padding: 10px 18px;
    background-color: #f44336;
}
            .back{
background-repeat: no-repeat; 
width:100%;
 
background-size: cover;
height: 75%; 
}
       h1{
text-align: center;
    text-transform: uppercase;
    color: mediumvioletred;
}
            p{
text-align: center;
  
    letter-spacing: 3px;}
            /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 40%;
	   
    }
}
   
        </style>
		
		
		
		<?php



include("connection.php");
$id=$_GET['idd'];

$_SESSION["loid"]=$id;

$result=mysqli_query($conn,"select * from login where logid='$id'");

if($row1=mysqli_fetch_array($result))
	{
	 $u=$row1[2];
	 $pas=$row1[1];
	 }


$re=mysqli_query($conn,"select * from student where logid='$id'");

	if($row=mysqli_fetch_array($re))
	{
?>
		
 <form class="modal-content animate" action='supdate.php' method='post'>
		   <table style="width:100%">
  <th><h2>ADD STUDENT</h2></th>
  <tr>
    <td><label> Name</label></td>
    <td colspan="3"><input type="text"  name="sname" required  value="<?php  echo $row[2]?>"></td>
  </tr>
  
  <tr>
    <td>DOB</td>
    <td colspan="3"><label>
      <input type="date" name="dob" required  value="<?php  echo $row[7]?>">
    </label></td>
  </tr>
  <tr>
    <td><label for="uname">User Name</label></td>
    <td colspan="3"><input type="text" id="uname" name="uname"required  value="<?php  echo $u ?>">
        <br></td>
  </tr>
  <tr>
    <td><label for="course">Course</label></td>
    <td colspan="3"><b>
      <select id="course" name="course" value="<?php  echo $row[4]?>">
        <option value="MCA">MCA</option>
        <option value="MBA">MBA</option>
      </select>
    </b></td>
    <br>
  </tr>
  <tr>
    <td><label for="sem">Semester</label></td>
    <td colspan="3"><input type="Number" id="sem" name="sem" required value="<?php  echo $row[5]?>"></td>
    <br>
  </tr>
  <tr>
    <td><label for="batch">Batch</label></td>
    <td colspan="3"><input type="Number" id="batch" name="batch" required  value="<?php  echo $row[6]?>"></td>
    <br>
  </tr>
 <!-- <tr>
    <td><label for="gender">Gender</label></td>
    <td colspan="3"><input type="radio" name="gender" value="m" checked>
      Male
      <input type="radio" name="gender" value="f">
      &nbsp Female
      <input type="radio" name="gender" value="o">
      &nbsp Other</td>
    <br>
  </tr>-->
  <tr>
    <td><label for="pass">Password</label></td>
    <td colspan="3"><input type="password" id="pass" name="pass" required  onKeyUp='check();' value="<?php  echo $pas ?>"></td>
    <br>
  </tr>
  <tr>
    <td><label for="re">Re-Enter Password</label></td>
    <td colspan="3"><input type="password" id="rpass" name="rpass" required  onKeyUp='check();' value="<?php  echo $pas ?>">
        <label> <span id='message'></span></label></td>
    <br>
  </tr>
  <tr>
    <td><label for="ph">Phone Number</label></td>
    <td colspan="3"><input type="text" id="pno" name="pno" required value="<?php  echo $row[8]?>"></td>
    <br>
  </tr>
  
  <tr><td><label><b>Enter Email</b></label></td>
                <td><input type="email" name="smail"required value="<?php  echo $row[9]?>"></td></tr><br>
  
  
 <!-- <tr>
  
    <td><button type="submit" value="Submit">EDIT</button></td>
	</tr>-->
	 </table>
		<?php }?>
      </center>
	  <button type="submit" style="background-color:#4CAF50;margin-left:auto;margin-right:auto;display:block" align="middle" >ADD</button>
	  
	   <div class="container" >
      <button type="submit"  onClick="<?php header("Location: pview.php"); ?>"  style="background-color:red;margin-left:auto;margin-right:auto;display:block" align="middle">CANCEL</button>
</div>
	  
	  </form>
</div>
</head>
</html>