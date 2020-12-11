<?php
    session_start();
    include("../lib/connection.php");

    if(!isset($_SESSION['username'])){
        header("Location: ../index.php");
    }

    if($_POST){
        $id = $_POST['editID'];
        $ten = $_POST['editName'];
        $sdt = $_POST['editPhone'];
        $diachi = $_POST['editAdress'];
        $email = $_POST['editEmail'];
        //$role = $_POST['role'];
        $nganh = $_POST['nganh'];

        //$conn = new mysqli("localhost", "root", "", "test");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sqlAdd = "UPDATE truongphong SET ten = '$ten', sdt = '$sdt', diachi = '$diachi', email = '$email', bomon = '$nganh' WHERE id = '$id'";
        $query = mysqli_query($conn, $sqlAdd);
        if ($query) {
            //echo "<script type='text/javascript'>alert('Sửa thông tin thành công');</script>";
            header("Location: tracuu.php");         
        } else {
            echo "<script type='text/javascript'>alert('Sửa thông tin không thành công');</script>";
        }
        
    }       
    //$conn->close();   
?>