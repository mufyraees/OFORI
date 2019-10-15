 <form class="modal-content animate" action='ssignup.php' method='post'>
		   
		   
		   
		   <table style="width:100%">
  <th><h2> STUDENT TEST DETAILS </h2></th>
  <tr>
    <td><label> Name</label></td>
    <td colspan="3"><input type="text"  name="sname" required></td>
  </tr>
  <br>
 
  <tr>
    <td><label for="course">Course</label></td>
    <td colspan="3"><label>
      <input type="text" name="textfield2">
    </label></td>
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
    <td colspan="3"><label>
      <input type="text" name="textfield">
      <br>
    </label></td>
    <br>
  </tr>
 
  <tr>
    <td><label for="ph">Level</label></td>
    <td colspan="3"><input type="text" id="pno" name="pno" required></td>
    <br>
  </tr>
  <tr>
    <td><label>Test Date </label></td>
    <td><label>
      <input type="text" name="textfield3">
    </label></td>
  </tr>
  <tr>
    <td><label>Teacher Score</label></td>
    <td><input type="text" name="textfield4"></td>
  </tr>
  <tr>
    <td><label>Test Date</label></td>
    <td><input type="text" name="textfield5"></td>
  </tr>
  <tr>
    <td><label>Teacher Comments</label></td>
    <td><textarea name="textarea"></textarea></td>
  </tr>
  <tr>
    <td><label>Suggestions</label></td>
    <td><textarea name="textarea2"></textarea></td>
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