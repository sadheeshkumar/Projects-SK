<?php
session_start();
if(!isset($_SESSION['username']) || $_SESSION['role']!="student"){
    header("location:home.php");
}
?>