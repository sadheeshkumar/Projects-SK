<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['role']!="admin"){
    header("location:home.php");
}
?>
<html>
<head>
<title>Admin Pannel  </title>
<link rel="stylesheet" type="text/css" href="css/admin.css">
<script src="https://kit.fontawesome.com/d8f361fce7.js" crossorigin="anonymous"></script>
<img src="logo.jpg">
      <h1>K.S.Rangasamy College of Arts & Science (Autonomous)<br>
         K.S.R Kalvi Nagar <br>
         Tiruchengode-637 215<br>
         <hr>
       </h1>
       <h2>NMEC APPLICATION</h2>
</head>
<body>
<nav>
<ul>
<li><a>Student <i class="far fa-caret-square-down"></i></a>
<ul>
<li><a href="addstudent.php">Add Student </a></li>
<li><a href="search.php">Search Student</a></li>
<li><a href="">Change Student</a></li>
</ul>
</li>
<li><a>Department <i class="far fa-caret-square-down"></i></a>
<ul>
<li><a href="">Add Subject</a></li>
<li><a href="">Department Coordinators</a></li>
<li><a href="">View Subject</a></li>
</ul>
</li>
<li><a href="">Strenght Diss Summary</a></li>
<li><a href="">Change Password</a></li>
<li><a href="">Add Users</a></li>
<li><a href="logout.php">Logout</a></li>
</nav>
</body>
</html>