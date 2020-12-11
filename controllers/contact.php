<?php
    session_start();
    error_reporting(E_ALL);
    if(!isset($_SESSION['username'])){
        header("Location: ../index.php");
    }
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
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
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0" style="margin-top: 19px;">CONTACT US</h3>
                        <!-- <a class="nav-link active" href="home.php"><i class="fas fa-tachometer-alt"></i><span >&nbsp;HOME</span></a></li> -->
                    </div>
                </div>
                <div class="card shadow border-left-primary py-2" style="margin-bottom: 7px;margin-left: 8px;">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col mr-2">
                                <div class="text-uppercase text-success font-weight-bold text-xs mb-1"></div>
                                <div class="text-dark font-weight-bold h5 mb-0"><span>TRƯỜNG ĐẠI HỌC THỦY LỢI<br>Địa chỉ: 175 Tây Sơn, Đống Đa, Hà Nội<br>Điện thoại: (024) 38522201 - Fax: (024) 35633351<br>Email: phonghcth@tlu.edu.vn</span></div>
                            </div>
                            <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
                <div class="card shadow border-left-primary py-2" style="margin-bottom: 7px;margin-left: 8px;">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col mr-2">
                                <div class="text-uppercase text-success font-weight-bold text-xs mb-1"></div>
                                <div class="text-dark font-weight-bold h5 mb-0"><span>CƠ SỞ PHỐ HIẾN<br>Địa chỉ: Quốc lộ 38B Nhật Tân, Tiên Lữ, Hưng Yên<br>Điện thoại: (0221) 3883885<br>Email: Bandtctsvphohien@tlu.edu.vn</span></div>
                            </div>
                            <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
                <div class="card shadow border-left-primary py-2" style="margin-bottom: 7px;margin-left: 8px;">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col mr-2">
                                <div class="text-uppercase text-success font-weight-bold text-xs mb-1"></div>
                                <div class="text-dark font-weight-bold h5 mb-0"><span>PHÂN HIỆU ĐẠI HỌC THỦY LỢI<br>Địa chỉ 1: Số 2 Trường Sa, P.17, Q.Bình Thạnh, Tp.Hồ Chí Minh<br>Điện thoại: (028) 38400532 - Fax: (028) 38400542<br>Địa chỉ 2: Phường An Thạnh, TP Thuận An, Tỉnh Bình Dương<br>Điện thoại: (065) 3748620 - Fax: (065) 3833489<br>Email: cs2@tlu.edu.vn</span></div>
                            </div>
                            <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
                <div class="card shadow border-left-primary py-2" style="margin-left: 8px;">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col mr-2">
                                <div class="text-uppercase text-info font-weight-bold text-xs mb-1"></div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="text-dark font-weight-bold h5 mb-0 mr-3"><span>VIỆN ĐÀO TẠO VÀ KHOA HỌC ỨNG DỤNG MIỀN TRUNG<br>Địa chỉ: Số 115 Trần Phú, Thành phố&nbsp;Phan Rang, Tỉnh Ninh Thuận<br>Điện thoại: (0259) 3823027, (0259) 3823028<br>Email:&nbsp;<a href="http://www.tlu.edu.vn/#"><span style="text-decoration: underline;">trungtamdh2@tlu.edu.vn</span></a><br></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
                <div class="card shadow border-left-primary py-2" style="margin-left: 8px;margin-top: 7px;">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col mr-2">
                                <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span></span></div>
                                <div class="text-dark font-weight-bold h5 mb-0"><span>© 2020 TRƯỜNG ĐẠI HỌC THỦY LỢI<br></span></div>
                            </div>
                            <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
                <!-- <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="#" style="margin-left: 9px;margin-top: 10px;">LOG OUT</a></div> -->
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
