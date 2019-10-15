<?php
session_start();
?>
<html>
    <head>
<style>
table, td {
    border: 1px solid black;
}
    .back{
background-repeat: no-repeat; 
width:100%;
 
background-size: cover;
height: 20%; 
}
    p{
text-align: center;
  
    letter-spacing: 3px;}
h1{
text-align: center;
    text-transform: uppercase;
    color: white;
}
    #tb {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#tb td, #tb th {
    border: 1px solid #ddd;
    padding: 8px;
}

#tb tr{background-color: #f2f2f2;}

#tb tr:hover {background-color: #ddd;}

#tb th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: darkorange;
    color: white;
}
    button {
    background-color: darkorange;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 35%;
    text-transform: uppercase;
    
}
</style>
        <?php
    function f2()
    {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ofori";
        $tid= $_SESSION["uid"];


$conn = new mysqli($servername, $username, $password, $dbname);
$rowcount="";

if (!$conn) {
    echo "Connection failed";
} 
$sql="SELECT * from result where tid='$tid'";
        $result = $conn->query($sql);


      echo" <center> <table id= tb>
      <th> ID</th>
  <th>
    Student Name</th>
   
      <th>Test Type</th>
      <th>Test score </th>
      <th></th>
  
  ";
        if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc())
        
    {
        echo"<tr><td>".$row["sid"]."</td>";
      echo "<td>".$row["sname"]."</td>";
         echo "<td>".$row["type"]."</td>";
         echo "<td>".$row["sscore"]."</td>";
        echo "<td><button onclick=window.location.href='ttesthome.php'>Proceed</button></td></tr>";
    }
      
    }
        echo"</table> </center>";
    }

?>
</head>
    
    <body background="theme.jpg" class="back">
   
        <h1 align="center">OFORI</h1>
<p>
If you want to be Happy, BE !
</p>

<br><br>

        <?php f2(); ?> 
    </body>
    </html>