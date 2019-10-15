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
    </head>
    <body background="baloon.jpg"class="back">
    <h1 align="center">OFORI</h1>
    <p >
If you want to be Happy, BE !
</p>
        
        
  <script>
     function check() {
  if (document.getElementById('pass').value ==
    document.getElementById('rpass').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}
    </script> 
    
  
            <br>
        <center>
            
            <form action="sresult.php" method="post"><button type="submit">View Student's Result</button></form>
            
                 
            
       
        <p><button onClick="document.getElementById('id03').style.display='block'">ADD STUDENT</button></p><br><br>
        <div id="id03" class="modal">
           <form class="modal-content animate" action='ssignup.php' method='post'>
		   
		   
		   
		   <table style="width:100%">
  <th><h2>ADD STUDENT</h2></th>
  <tr>
    <td><label> Name</label></td>
    <td colspan="3"><input type="text"  name="sname" required></td>
  </tr>
  <br>
  <tr>
    <td><label for="uname">User Name</label></td>
    <td colspan="3"><input type="text" id="uname" name="uname"required  >
        <br></td>
  </tr>
  <tr>
    <td><label for="course">Course</label></td>
    <td colspan="3"><b>
      <select id="course" name="course">
        <option value="MCA">MCA</option>
        <option value="MBA">MBA</option>
      </select>
    </b></td>
    <br>
  </tr>
  <tr>
    <td><label for="sem">Semester</label></td>
    <td colspan="3"><input type="Number" id="sem" name="sem" required></td>
    <br>
  </tr>
  <tr>
    <td><label for="batch">Batch</label></td>
    <td colspan="3"><input type="Number" id="batch" name="batch" required></td>
    <br>
  </tr>
  <tr>
    <td><label for="gender">Gender</label></td>
    <td colspan="3"><input type="radio" name="gender" value="m" checked>
      Male
      <input type="radio" name="gender" value="f">
      &nbsp Female
      <input type="radio" name="gender" value="o">
      &nbsp Other</td>
    <br>
  </tr>
  <tr>
    <td><label for="pass">Password</label></td>
    <td colspan="3"><input type="password" id="pass" name="pass" required  onKeyUp='check();'></td>
    <br>
  </tr>
  <tr>
    <td><label for="re">Re-Enter Password</label></td>
    <td colspan="3"><input type="password" id="rpass" name="rpass" required  onKeyUp='check();'>
        <label> <span id='message'></span></label></td>
    <br>
  </tr>
  <tr>
    <td><label for="ph">Phone Number</label></td>
    <td colspan="3"><input type="text" id="pno" name="pno" required></td>
    <br>
  </tr>
  <tr>
    <td><button type="submit" value="Submit">Submit</button></td>
	<td><button type="button" onClick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button></td>
  </tr>
      </table>
      </b>
      
      </div>
    
    </form>
        </div>
            
        
          </form>
        </center>
</body>
</html>

		   
		   
		   
		   
		   
		   
		   
	<!--   
      <button type="submit" style="background-color:#4CAF50;margin-left:auto;margin-right:auto;display:block" align="middle" >Add PSYCHIATRIST</button>
    </div>

    <div class="container" >
      <button type="button"  onclick="document.getElementById('id03').style.display='none'" class="cancelbtn" style="background-color:red;margin-left:auto;margin-right:auto;display:block" align="middle">Cancel</button>
    </div>
  </form>
        </div>


<p><button onClick="document.getElementById('id04').style.display='block'">ADD TEACHER</button></p><br><br>
        <div id="id04" class="modal">
           
		    <form class="modal-content animate" action='tsignup.php' method='post'>
    

    <div class="container">
        <center>
        <table style="width:90%">
            <th><h2>ADD TEACHER</h2></th>
            <tr>
                <td><label><b>Enter Name</b></label></td>
                <td> <input type="text" name="tname">
                </td>
            </tr>
            
                 
            <tr><td><label><b>Enter User Name</b></label></td>
      <td colspan="3"><input type="text"   name="uname"  required></td></tr><br>
            <tr><td><label><b>Enter Password</b></label></td>
               <td><input type="password" name="pass" required></td></tr><br>
			   
			   <tr><td><label><b>Re-Enter Password</b></label></td>
               <td><input type="password" name="rpass" required></td></tr><br>
			  <tr> 
			   <td><label for="sem">Semester</label></td>
			   
			  <td colspan="3"><input type="text" id="sem" name="sem" required></td></tr>
	<tr>
	<td><label for="course">Course:</label></td>
    <td colspan="3"><input type="text" id="course" name="course" required></td></tr>
			   
            <tr><td><label><b>Enter Phone Number</b></label></td>
              <td><input type="number" name="pno" required></td></tr><br>
            <!--<tr><td><label><b>Enter Email</b></label></td>
                <td><input type="email" name="tmail"required></td></tr><br>
            -->
           <!-- <tr>
    <td><label for="gender">Gender</label></td>
    <td colspan="3"><input type="radio" name="gender" value="m" checked>
      Male
      <input type="radio" name="gender" value="f">
      &nbsp Female
      <input type="radio" name="gender" value="o">
      &nbsp Other</td>
    <br>
  </tr>
            
            
                
        </table>
      </center>
      <button type="submit" style="background-color:#4CAF50;margin-left:auto;margin-right:auto;display:block" align="middle" >ADD</button>
    </div>

    <div class="container" >
      <button type="button"  onclick="document.getElementById('id04').style.display='none'" class="cancelbtn" style="background-color:red;margin-left:auto;margin-right:auto;display:block" align="middle">Cancel</button>
    </div>
  </form>
        </div>
    </body>
    </html>*/-->