<?php
session_start();

session_destroy();
header("refresh:1; url=loginpage2.php");
?>