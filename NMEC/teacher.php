<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['role']!="teacher")
{
    header("location:home.php");
}
?>
<html>
<head>
<title>Admin Pannel  </title>
<link rel="stylesheet" type="text/css" href="css/staff.css">
<script src="https://kit.fontawesome.com/d8f361fce7.js" crossorigin="anonymous"></script>
<img src="logo.jpg">
      <h1>K.S.Rangasamy College Of Arts & Science (AUTONOMOUS)<br>
         K.S.R Kalvi Nagar <br>
         Tiruchengode-637 215<br>
         <hr>
       </h1>
       <h2>NMEC APPLICATION</h2>
</head>
<body>


</body>
</html>