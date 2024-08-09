<?php
session_start();
$registerno="";
$name="";
$subject="";
$subjectcode="";
$errors = array();

//connect to db

$db = mysqli_connect('localhost','root','','nmec') or die ("Could not connect to DB");

//register user
if (isset($_POST['add'])){
    $registerno = mysqli_real_escape_string($db, $_POST['registerno']);
    $name = mysqli_real_escape_string($db, $_POST['studentname']);
    $subject = mysqli_real_escape_string($db,$_POST['subjectname']);
    $subjectcode = mysqli_real_escape_string($db,$_POST['subjectcode']);
}
//check existing student
$user_check_query = " SELECT * FROM student where registerno = '$registerno' LIMIT 1  ";
$results = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($results);

//register
if(count($errors)==0) {
    $query = "INSERT INTO student (registerno, studentname, subjectname, subjectcode) VALUES ('$registerno','$name','$subject','$subjectcode')"; 
    mysqli_query($db,$query); 
}

?>