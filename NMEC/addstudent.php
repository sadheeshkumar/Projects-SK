<?php include('server.php')?>
?>
<html>
   <head>
       <title>
          NMEC 
       </title>
       <link href="CSS\student\addstudent.css"rel="stylesheet" type="text/css">
       
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
       <form action="addstudent.php" method="post" autocomplete="off">
       <input type="text" name="registerno" placeholder="ENTER REGISTER" required>
       <input type="text" name="studentname" placeholder="ENTER STUDENT NAME"required>
       <input type="text" name="subjectname" placeholder="SUBJECT NAME" required>
       <input type="text" name="subjectcode" placeholder="SUBJECT CODE" required>
       <input type="submit" name="add" value="ADD">
    </form>
    </div>
   </body>
</html>
