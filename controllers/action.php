<?php
error_reporting(E_ALL);
    session_start();
    require_once("../lib/connection.php");
    if($_POST){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM taikhoan WHERE email = '$email' AND passwd = '$password'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($query);

        if($row[1] == $email && $row[2] == $password){
            $count = mysqli_num_rows($query);
            if($count == 1){
                $_SESSION['username'] = $email;
                header('Location: ../index.php');
            }else{
                header('Location: ../index.php');
            }
        }else{
            echo "Wrong email or password. Please re-enter!";
        }   
        
        //echo $email;
    }
?>