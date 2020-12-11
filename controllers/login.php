<?php
    if(!isset($_SESSION)){
        session_start();
    }
    error_reporting(E_ALL);
    //include("../view/login.html");
    include("../lib/connection.php");

    // if($_POST){
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    //     $sql = "SELECT * FROM taikhoan WHERE email = '$email' AND pass = '$password'";
    //     $query = mysqli_query($conn, $sql);
    //     $row = mysqli_fetch_row($query);

    //     if($row[1] == $email && $row[2] == $password){
    //         $count = mysqli_num_rows($query);
    //         if($count == 1){
    //             $_SESSION['username'] = $email;
    //             $_SESSION['phanquyen'] = $row[3];
    //             header('Location: quanlyhoso.php');
    //         }else{
    //             header('Location: ../index.php');
    //         }
    //     }else{
    //         echo "<script type='text/javascript'>alert('Wrong email or password. Please re-enter!');</script>";
    //     }
    // }

    if($_POST){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql ="SELECT * FROM taikhoan WHERE email = '$email' AND pass = '$password'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // $_SESSION['name'] = $row['ho']." ".$row['ten'];
            $_SESSION['username'] = $email;
             $_SESSION['phanquyen'] = $row['role'];
                if ( $_SESSION['phanquyen']==1){
                    header('Location: home.php');
                }
                else{
                    header('Location: ../index.php');
                    // echo $_SESSION['phanquyen'];
                }

        } 
        else{
                    echo "<script type='text/javascript'>alert('Wrong email or password. Please re-enter!');</script>";
                }
             
         $conn->close();
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/loginCss.css">
    <script>
        $(document).ready(function(){
            var submit = $("button[type='submit']");
            
            submit.click(function(){
                var email = $("input[name='email']").val();
                var password = $("input[name='password']").val();
                
                // Kiểm tra đã nhập tên tài khoản chưa
                if (email == '') {
                    alert('Vui lòng nhập email');
                    return false;
                }
                
                // Kiểm tra đã nhập mật khẩu chưa
                if (password == '') {
                    alert('Vui lòng nhập mật khẩu');
                    return false;
                }
                    })
        })
    </script>
</head>

<body>
    <div class="container">
        <!-- <form action="../controllers/action.php" method="POST"> -->
        <form method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">
                    <h3>Email address</h3>
                </label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">
                    <h3>Password</h3>
                </label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                <a href="#" class="float-md-right">Quên mật khẩu</a>
            </div>
            <button type="submit" class="btn btn-secondary">Login</button>
        </form>
    </div>
</body>