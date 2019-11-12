<html>
<style type="text/css">
<!--
td {color:#FFFFFF;
text-align: left;
text-transform:uppercase;
font-size:18px;
border: 1px solid transparent
}

input {
 padding: 5px 8px;
  margin: 8px 0;
  box-sizing: border-box;
  text-transform:capitalize
}
input[type=radio]
{
text-transform:lowercase
}
button {
  background-color:#999999; /* Green */
  border: none;
  color: white;
  text-align: center;
  
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  padding:8px
}

-->
</style>





 <form  action='' method='post'>
<?php 
include("psychiatristheader.php");
?>		   
		   
		<div style="overflow:scroll; width:1040; height:550px">   
		   <table style="width:100%">
  <th width="50%"><h2> STUDENT TEST DETAILS </h2></th>
  
 
  
    <?php
  session_start();
  
include("connection.php");
$lid=$_GET['id'];
$level=$_GET['level'];


$_SESSION['level']=$level;


$res=mysqli_query($conn,"select student.*,result.* from student join result on student.logid=result.st_id where student.logid='$lid' and 
result.level='$level' ");
if($row=mysqli_fetch_array($res))
{
$resultid=$row['rsltid'];
//new view

$date=$row['sdate'];

$_SESSION['resid']=$resultid;

?>
  <tr>
  
    <td><label> Name</label></td>
    <td width="50%" colspan="3"><input type="text"  name="sname" require  value="<?php echo $row[2]?>"d></td>
  </tr>
  <br>
 
  <tr>
    <td><label for="course">Course</label></td>
    <td colspan="3"><label>
      <input type="text" name="textfield2" value="<?php echo $row[4]?>">
    </label></td>
    <br>
  </tr>
  <tr>
    <td><label for="sem">Semester</label></td>
    <td colspan="3"><input type="Number" id="sem" name="sem" required value="<?php echo $row[5]?>"></td>
    <br>
  </tr>
  <tr>
    <td><label for="batch">Batch</label></td>
    <td colspan="3"><input type="Number" id="batch" name="batch" required value="<?php echo $row[6]?>"> </td>
    <br>
  </tr>
  <tr>
    <td><label for="gender">Gender</label ></td>
    <td colspan="3"><label>
      <input type="text" name="textfield"  value="<?php echo $row[3]?>">
      <br>
    </label></td>
    <br>
  </tr>
 
  <tr>
    <td><label for="ph">Level</label></td>
    <td colspan="3"><input type="text" id="pno" name="pno" required value="<?php echo $row[21]?>"> </td>
    <br>
  </tr>
  
   <tr>
    <td><label> Score</label></td>
    <td><input type="text" name="textfield4" value="<?php echo $row[12]?>"></td>
	<?php }?>
	 <tr><td>  <p align="center"><input type="submit" name="button" value="test view"><br><br></p></td>
	 </tr>
	 </table>
   <div align="center">
  <?php 
	  
	  if(isset($_POST["button"]))
	  {
	  ?>
             
             
             
             
             
  <?php		
$res=mysqli_query($conn,"SELECT questions.*,answer2.score from questions join answer2 ON questions.qid=answer2.qid where questions.usertype='student' and questions.level='$level' and answer2.date='$date' and answer2.userid='$lid'");
$i=1;


while($row=mysqli_fetch_array($res))
{

?>
             
             
             
             
             
 <table width="50%" border="1">
    <tr>
      <td width="75"><?php  echo $i?></td>
        <td width="373"><?php  echo $row[2]?></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
        <td>
            <input name="radiobutton<?php  echo $i?>" type="radio" />
          <label style="text-transform: lowercase"><?php  echo $row[3]?></label>
          <br>
          score: <?php  echo $row[4]?><br />
            
          <input name="radiobutton<?php  echo $i?>" type="radio" />
          <?php  echo $row[5]?>
          <br>
          score:<?php  echo $row[6]?>
          <br />
            
          <input name="radiobutton<?php  echo $i?>" type="radio" />
          <?php  echo $row[7]?>
          <br>
          score:<?php  echo $row[8]?><br>
        </td>
      </tr>
    <tr>
      <td>score</td>
        <td><?php echo $row[11]?></td>
      </tr>
    <p>...............................................................................................................................................</p>
    
    <?php 
$i++;


 }
 ?>
  </table>
  <p>&nbsp;</p>
  <p>
    <?php }?>
  </p>
  <p>&nbsp; </p>
   </div>
           <p></p>
<p>
  <!--<button type="button"  onclick="document.getElementById('id03').style.display='none'"  style="background-color:red;margin-left:auto;margin-right:auto;display:block">Cancel</button>
		-->
  
  
  
  
  
  <!--<input type="submit" name="Submit" value="test view">-->
  </label>
  
  
  
  
 <?php 
$res=mysqli_query($conn,"select student.*,result.* from student join result on student.logid=result.st_id where student.logid='$lid' and 
result.level='$level'");
if($row=mysqli_fetch_array($res))
{
 ?> 
  
   <table border="1" align="left">
     <tr>
       <td><label>Test Date </label></td>
      <td><label>
        <input type="text" name="textfield3" value="<?php echo $row[14]?>">
       </label></td>
    </tr>
     <tr>
       <td><label>Teacher Score</label></td>
      <td><input type="text" name="textfield4" value="<?php echo $row[16]?>"></td>
    </tr>
     <tr>
       <td><label>Test Date</label></td>
      <td><input type="text" name="textfield5" value="<?php echo $row[17]?>"></td>
    </tr>
     <tr>
       <td><label>Teacher Comments</label></td>
      <td><textarea name="textarea">"<?php echo $row[17]?>"</textarea></td>
    </tr>
     <tr>
       <td><label>Suggestions</label></td>
      <td><textarea name="textarea2"></textarea></td>
    </tr>
	<tr>
	<td><label>Type</label></td>
	
	<td>
        
                <select name="type">
  <?php
  include("connection.php");
  $re=mysqli_query($conn,"select * from type");
  while($row=mysqli_fetch_array($re))
  {
  
  ?>
  <option value="<?php echo $row[0]?>"><?php echo $row[1]?></option>
  <?php }?>
</select>
                </td>
	</tr>

     <tr>
        
       <td><button type="submit" value="Submit" name="sub">Submit</button></td>
	  <td><button type="button" onClick="location='stresult.php'">Cancel</button></td>
	  <?php }?>
     </tr>
   </table>
   </b>
    
    
    
 </form>
 </div>
        </div>
            
        
        </center>
		
		
		<p>
		  <?php
		  if(isset($_POST['sub']))
            {
			$resultid=$_SESSION['resid'];
			$plid=$_SESSION['lid'];
			$comment=$_POST['textarea2'];
			
			$type=$_POST['type'];
			mysqli_query($conn,"update result set pid='$plid',pcomm='$comment',type='$type' where rsltid='$resultid' ");
            header("location:stresult.php");
			
			
			}
		?>
		
</p>
		<p>&nbsp;        </p>
</body>
</html>

		   
		   <?php 
include("footer.php");
?>