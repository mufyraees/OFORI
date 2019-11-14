<?php

include("connection.php");
//$qid=$_GET['qid'];
//if(isset($_POST['sub']))
//{
$selectd=$_POST['checkbox'];


foreach($selectd as $qid)
{
mysqli_query($conn,"delete from questions where qid=".$qid);
}
?>
<script>alert("deleted sucess fully");

</script>


<?php
header("refresh:1; url=qstiondelete.php");
//}
?>