<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['role']!="admin"){
    header("location:home.php");
}
?>
<html>
   <head>
       <title>
          NMEC 
       </title>
       <link href="CSS\student\search.css" rel="stylesheet" type="text/css">
       <script src="https://kit.fontawesome.com/d8f361fce7.js" crossorigin="anonymous"></script>
   </head>
   <img src="logo.jpg">
      <h1>K.S.Rangasamy College Of Arts & Science (Autonomous)<br>
         K.S.R Kalvi Nagar <br>
         Tiruchengode-637 215<br>
         <hr>
       </h1>
       <h2>NMEC APPLICATION</h2>
<body>
   <form>
<div class="search-box">
<input class="search-txt" type="text" name="registerno" placeholder="ENTRE REGISTER NO" required>
<button class="search-btn" type="submit" name="search"><i class="fas fa-search"></i></button>
</from>
<?php
$conn = mysqli_connect("localhost","root","","nmec");
if(isset($_POST['search'])){
$registerno = $_POST['registerno'];
$sql= "SELECT * FROM student WHERE registerno='$registerno'";
$res = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($res))
{
   ?>
   <form action="" method ="POST">
      <input type="text" name="registerno" value="<?php echo $row['registerno']?>"/>
      <input type="text" name="studentname" value="<?php echo $row['studentname']?>"/>
   <?php
}

}
?>
</div>
</body>
</html>