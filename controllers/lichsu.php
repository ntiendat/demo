<?php
   if(!isset($_SESSION)){
    session_start();
}
    //include("../view/tracuu.html");
    include("../lib/connection.php");
    
    if(!isset($_SESSION['username'])){
        header("Location: ../index.php");
    }
    $sql = "SELECT * FROM lichsu ";
    // $sql1 = "SELECT * FROM taikhoan";
    $query = mysqli_query($conn, $sql);
    // $query1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_row($query);

    if (mysqli_num_rows($query) > 0) {
?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
        function myFunction() {
        // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[7];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        $(document).ready(function(){
            $("select").change(function(){
            // Declare variables
            var input, filter, table, tr, td, i, txtValue, selectedValue;
            selectedValue = $(this).children("option:selected").val();
            filter = selectedValue.toLowerCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
        // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[5];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toLowerCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
            });
        });
        
        
    </script>
    <style>
        html{
            overflow:scroll;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">    
</head>

<body>
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
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="quanlyhoso.php"><i class="fas fa-tachometer-alt"></i><span >&nbsp;TRA CỨU THÔNG TIN</span></a></li>
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link active" href="mail.php"><i class="fas fa-tachometer-alt"></i><span >&nbsp;MAIL</span></a></li> -->
                    <li class="nav-item" role="presentation" id="lichsu"><a class="nav-link active" href="lichsu.php"><i class="fas fa-tachometer-alt"></i><span >&nbsp;LỊCH SỬ</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="contact.php"><i class="fas fa-tachometer-alt"></i><span >&nbsp;HỖ TRỢ</span></a></li>
                </ul>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <img src="../img/unnamed.jpg" alt="" style="width:100px; height:60px">
                    <h3  class="ml-3">Đại Học Thủy Lợi</h3>
                </nav>
                <div class="container-fluid" style="margin-top: 5%">
  <input class="form-control" id="myInput" type="text" placeholder="Search..">

                    <h3 style="float:left">Lịch sử chỉnh sửa dữ liệu</h3>

                    <!-- <div class="form-group">
                        <select id="role" class="m-2 form-control" style="float:right; width: 210px">
                            <option value="" disable selected hidden>Tìm kiếm theo chức vụ</option>
                            <option value=""></option>
                            <option value="Giảng viên">Giảng viên</option>
                            <option value="Trưởng phòng">Trưởng phòng</option>
                        </select>
                        <input type="search" name="" id="myInput" onkeyup="myFunction()" style="float:right; width: 210px" class=" m-2 form-control" placeholder="Tìm kiếm theo thời gian">
                    </div> -->
                    <table class="table table-bordered" id="myTable" style="font-size:20px">
                        <thead>
                            <tr>
                                <th style="text-align:center">ID</th>
                                <th style="text-align:center">Tác Vụ</th>
                                <th style="text-align:center">THời Gian</th>
                                <th style="text-align:center">Người Thực Hiện </th>
                           
                            </tr>
                        </thead>
                        <tbody>
                    <?php while($row = mysqli_fetch_assoc($query)) { ?>
                            <tr>
                                <td style="text-align:center"><?php echo $row['id'] ?></td>
                                <td style="text-align:left"><?php echo $row['tac_vu'] ?></td>
                                <td style="text-align:right"><?php echo $row['thoi_gian'] ?></td>
                                <td style="text-align:left"><?php echo $row['nguoi_thuc_hien'] ?></td>
                                
                            </tr>
                    <?php
                            }
                        } else {
                            error_reporting(0);
                            include("home.php");
                            echo "Không còn Hồ sơ trong database!";
                        };                        
                        mysqli_close($conn);
                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
