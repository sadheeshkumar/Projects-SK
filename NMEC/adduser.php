<?php
session_start();
$username="";
$password="";
$errors = array();
// DB Connecion
$db = mysqli_connect('localhost','root','','nmec') or die ("Could not connect to DB");
if (isset($_POST['add'])){
    $username = mysqli_real_escape_string($db, $_POST['registerno']);
    $password = mysqli_real_escape_string($db, $_POST['studentname']);
?>
<html>
   <head>
       <title>
          NMEC 
       </title>
       <link href="CSS\student\adduser.css" rel="stylesheet" type="text/css">
       </head>
   <img src="logo.jpg">
      <h1>K.S.Rangasamy College Of Arts & Science (Autonomous)<br>
         K.S.R Kalvi Nagar <br>
         Tiruchengode-637 215<br>
         <hr>
       </h1>
       <h2>NMEC APPLICATION</h2>
       <h3>(Non Major Elective Course)</h3>
<body>
   <form class="box"aciton="" method="POST" autocomplete="off">
   <input type="text" name="username" placeholder="USER ID" required>
   <input type="password" name="password" placeholder="PASSWORD" required>
   <input type="submit" name="add" value="ADD">
   </form>
   </body>
   </html>