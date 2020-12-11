<?php
//include("view/login.html");

session_start();

if(!isset($_SESSION['username'])){
    header('Location: controllers/login.php');
}else{
    header("Location: controllers/home.php");
}
?>