<?php 
//  error_reporting(E_ALL);
if(!isset($_SESSION)){
    session_start();
}
if ( isset($_SESSION['username'])){
   $x=$_SESSION['username'];
   $sql = "SELECT * FROM `thisinh` WHERE `email`='$x'";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
     $row = $result->fetch_assoc();
      $id=$row['id'];
      echo $id."-".$_SESSION['username'];
     
   }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="../assets/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="../assets/css/Dark-NavBar-2.css">
    <link rel="stylesheet" href="../assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="../assets/css/smoothproducts.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/sua.css">
</head>
<script>
function myFunction() {
        var ho                     = document.getElementById("ho").value;
        var ten                    = document.getElementById("ten").value;
        var CMND                   = document.getElementById("CMND").value;
        var SDT                    = document.getElementById("SDT").value;
        var email                  = document.getElementById("email").value;
        var thanhphothuongtru      = document.getElementById("thanhphothuongtru").value;
        var quanhuyenthuongtru     = document.getElementById("quanhuyenthuongtru").value;
        var phuongxathuongtru      = document.getElementById("phuongxathuongtru").value;
        var diachithuongtru        = document.getElementById("diachithuongtru").value;
        var matruonglop12          = document.getElementById("matruonglop12").value;
        var truong12               = document.getElementById("truong12").value;
        var matinhlop12            = document.getElementById("matinhlop12").value;
        if (truong12                 == null || 
            ho                       == null ||
            ten                      == null ||  
            CMND                     == null || 
            SDT                      == null || 
            email                    == null ||
            thanhphothuongtru        == null ||
            quanhuyenthuongtru       == null ||
            phuongxathuongtru        == null ||
            diachithuongtru          == null ||
            matruonglop12            == null || 
            matinhlop12              == null ||
            truong12                 == "" ||
            ho                       == "" ||
            ten                      == "" || 
            CMND                     == "" || 
            SDT                      == "" || 
            email                    == "" || 
            thanhphothuongtru        == "" || 
            quanhuyenthuongtru       == "" ||
            phuongxathuongtru        == "" || 
            diachithuongtru          == "" || 
            matruonglop12            == "" || 
            matinhlop12              == "" 
         ) 
         {
             
             alert("Chưa nhập đủ thông tin");
            return false;
        }
}
var nv = 1
        function themnguyenvong() {
           
            if(nv<3){
                nv++;
                var html = $('#nguyenvong1').html();

                html.replace('nguyenvong1','nguyenvong'+nv);
            // alert(html);
                
                $("#nguyenvong").append("<div class='col-md-4 nv"+nv+"'><p style=' line-height: 3;'> Nguyện Vọng "+ nv +" :</p></div><div class='col-md-4 nv"+nv+"'><select class='input-group input-by-me' name='nguyenvong"+nv+"' id='cars'>"+html+"</select>  </div> <div class='col-md-4 nv"+nv+"'> <p class='btn btn-primary ' onclick='xoanguyenvong"+nv+"()'>Xóa Nguyện Vọng</p> </div>");
        }
        else{
            alert("Chỉ được tối đa 3 nguyện vọng");
        }
        }
        function xoanguyenvong2(){
            $(".nv2").empty();
            nv--;

            
        }
        function xoanguyenvong3(){
            $(".nv3").empty();
            nv--;

            
        }
        

</script>
<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a href="../index.php"><img src="../assets/img/logo.png"></a><button data-toggle="collapse" class="navbar-toggler"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"
                        style="padding: 0;height: 131px;margin-left: 30px;margin-top: -49px;margin-bottom: -149px;">
                        <form class="form-inline search-form">
                            <div class="input-group">
                               
                                <div class="input-group-append">



                                 <?php
                                if(isset($_SESSION['username'])&&$_SESSION['username']=='admin'){
                                    // echo $_SESSION['username'];
                                    echo "<a href='home.php' style='font-size: 30px;color:blue;'>
                                 <i style='color: darkslateblue;  margin-right: 15px;margin-top: 6px;' class='fas fa-home'></i>
                                 </a>" ;
                                }

                                 if(isset($id)){
                                 echo "<a href='infoHS.php?id=".$id."' style='font-size: 30px;color:blue;'>
                                 <i style='color: darkslateblue;  margin-right: 15px;margin-top: 6px;' class='far fa-address-book'></i>
                                 </a>" ;} ?>
                                 
                                 
                                 
                                 <a href="tracuuhoso.php"><button class="btn btn-light" type="button"
                                        style="background-color: rgb(27,51,170);color: rgb(255,255,255);">Tra cứu
                                    </button></a>  
                                    <?php if(isset($_SESSION['username'])){
                                        echo " <a href='logout.php'><input type='button' value='Đăng Xuất'></a>";
                                    }
                                    else{
                                        echo " <a href='login.php'><input type='button' value='Đăng nhập'></a>";
                                    }
                                    
                                    ?>
                                   


                                </div>
                            </div>
                            
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
   <div class="container main-xethocba">
