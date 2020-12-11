<!-- <?php
    session_start();
    error_reporting(E_ALL);
	include("../lib/connection.php");  
    // if(!isset($_SESSION['username'])){
    //     header("Location: ../index.php");
    // }
	//echo $_SESSION['username'];
    ?> -->
    <!DOCTYPE html>
    <html>
    <head>
    	<meta charset="utf-8">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    	<link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    	<style>
    		#danhsachkhoa{
    			
    			text-align: center;
    		}
    		.khoa{
    			margin : 20px 20px 20px 20px;
    		}
    	</style>
    </head>

    <body id="page-top">
    	<div id="wrapper">
    		<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    			<div class="container-fluid d-flex flex-column p-0">
    				<a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">

    					<div class="sidebar-brand-icon rotate-n-15"></div>
    					<div class="sidebar-brand-text mx-3"><span>Quản lý nhân sự</span></div>
    				</a>
    				<hr class="sidebar-divider my-0">
    				<ul class="nav navbar-nav text-light" id="accordionSidebar">
    					<li class="nav-item" role="presentation"><a class="nav-link active" href="home.php"><i class="fas fa-tachometer-alt"></i><span >&nbsp;TRANG CHỦ</span></a></li>
    					<li class="nav-item" role="presentation"><a class="nav-link active" href="tracuu.php"><i class="fas fa-tachometer-alt"></i><span >&nbsp;TRA CỨU THÔNG TIN</span></a></li>
    					<li class="nav-item" role="presentation"><a class="nav-link active" href="mail.php"><i class="fas fa-tachometer-alt"></i><span >&nbsp;MAIL</span></a></li>
						<?php
							if($_SESSION['phanquyen'] == 0){
								echo "<li class='nav-item' role='presentation' id='lichsu'><a class='nav-link active' href='lichsu.php'><i class='fas fa-tachometer-alt'></i><span >&nbsp;LỊCH SỬ</span></a></li>";  
							}
                    	?>
    					<li class="nav-item" role="presentation"><a class="nav-link active" href="contact.php"><i class="fas fa-tachometer-alt"></i><span >&nbsp;HỖ TRỢ</span></a></li>
    				</ul>
    			</div>
    		</nav>
    		<div class="d-flex flex-column" id="content-wrapper">
    			<div>
    				<nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">

    					<img src="../img/unnamed.jpg" alt="" style="width:100px; height:60px">
    					<h3  class="ml-3 col-sm-11">Đại Học Thủy Lợi <a type="button" href="logout.php" class="float-right">Đăng xuất</a></h3>
    				</nav> 
    			</div>
    			<div class="container-fluid">
    				<div class="d-sm-flex justify-content-between align-items-center mb-4">
    					<h3 class="text-dark mb-0"><label class="nav-link right"></label></h3>
    				</div>
    				<!-- body -->
    				
    				<div class="container" id="danhsachkhoa">
                        <h1> Danh Sách khoa trường Đại Học Thủy Lợi </h1>
    					<div class="khoa"><a href="infokhoa.php">Khoa 1</a></br></div>
    					<div class="khoa"><a href="infokhoa.php">Khoa 2</a></br></div>
    					<div class="khoa"><a href="infokhoa.php">Khoa 3</a></br></div>
    					<div class="khoa"><a href="infokhoa.php">Khoa 4</a></br></div>
    					<div class="khoa"><a href="infokhoa.php">Khoa 5</a></br></div>
    					<div class="khoa"><a href="infokhoa.php">Khoa 6</a></br></div>
    					<div class="khoa"><a href="infokhoa.php">Khoa 7</a></br></div>
    					<div class="khoa"><a href="infokhoa.php">Khoa 8</a></br></div>
    				</div>


    				<footer class="bg-white sticky-footer">
    					<div class="container my-auto">
    						<div class="text-center my-auto copyright"><span>WEBAPP QUẢN LÍ NHÂN SỰ</span></div>
    					</div>
    				</footer>
    			</div>
    		</div>
    		<script src="assets/js/jquery.min.js"></script>
    		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    		<script src="assets/js/theme.js"></script>
    	</body>

    	</html>

