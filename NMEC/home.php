<?php 
session_start();
$conn = mysqli_connect("localhost","root","","nmec");
$msg="";
if(isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];
$userType = $_POST['userType'];
$sql = "SELECT  * FROM users WHERE username='" . mysqli_real_escape_string($conn,$username) . "' AND password='" . mysqli_real_escape_string($conn,$password) . "' AND user_type= '" . mysqli_real_escape_string($conn,$userType) . "'";
$res = mysqli_query($conn,$sql);
if($row = mysqli_fetch_assoc($res))
{
$_SESSION['username'] = $row['username'];
$_SESSION['role'] = $utype = $row['user_type'];
if($utype == "student")
header("location:student.php");
        elseif($utype == "teacher")
            header("location:teacher.php");
        elseif($utype == "admin")
            header("location:admin.php");
    }
    else
        $msg = "Invalid Username / Password!";    
}
?>
<html>
   <head>
       <title>
          NMEC 
       </title>
       <link href="CSS\home.css" rel="stylesheet" type="text/css">
   </head> 
   <body>
   <img src="logo.jpg">
      <h1>K.S.Rangasamy College of Arts & Science (Autonomous)<br>
         K.S.R Kalvi Nagar <br>
         Tiruchengode-637 215<br>
         <hr>
       </h1>
       <h2>NMEC APPLICATION</h2>
       <div class="box">
       <form  action=home.php method="POST" autocomplete="off">
       <img src="person.png" class="person"> 
       <input type="text" name="username" placeholder="USER ID" required>
       <input type="password" name="password" placeholder="PASSWORD" required>
       <div class="from-group lead">
<lable class ="usertype"> I'm a : </lable>&nbsp;
<label class="radiocontainer">
<input type="radio" name="userType" value="admin"
class="custom-radio" required>&nbsp;&nbsp; Admin |&nbsp;&nbsp;
<span class="circle"></span>
</label>
<label class="radiocontainer">
<input type="radio" name="userType" value="teacher"
class="custom-radio" required>&nbsp;&nbsp; Teacher |&nbsp;&nbsp;
<span class="circle"></span>
</label>
<label class = "radiocontainer">
<input type="radio" name="userType" value="student"
class="custom-radio" required>&nbsp; &nbsp;Student 
<span class="circle"></span>
</label>
</div>
     <input type="submit" name="login" value="LOGIN">
    </form>
 </div>
</body>
</html>