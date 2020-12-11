<?php
 session_start();
 error_reporting(E_ALL);
 // include("../view/home.html");
 include("../lib/connection.php");  
 if(isset($_SESSION['username'])&&$_SESSION['phanquyen']==1){
    
 }
 else{
     header("Location: ../index.php");
 }
   include("../lib/connection.php");
   include("header.php");  
//    header('Content-type: text/html; charset=utf-8');
//    header('Content-Type: text/html; charset=utf-8');
  ?>

<div class="form-group">
  <label for="">Chọn Biểu Đồ </label>
  <select class="form-control" name="" id="chonbieudo">
    <option></option>
    <option value="toan">Phổ Điểm Toán</option>
    <option value="van">Phổ Điểm Văn</option>
    <option value="anh">Phổ Điểm Tiếng Anh</option>
    <option value="vat_ly">Phổ Điểm Vật Lý</option>
    <option value="hoa">Phổ Điểm Hóa Học</option>
    <option value="sinh">Phổ Điểm Sinh Học</option>
    <option value="su">Phổ Điểm Lịch Sử</option>
    <option value="dia_ly">Phổ Điểm Đại Lý</option>
    <option value="GDCD">Phổ Điểm GDCD</option>
    <option value="thongkenganh">Thống kê Ngành Xét Tuyển</option>
    
  </select>
  <div class="bieudo"  id="bieudo" >
  <img  src="" alt="">
  </div>
</div>





<?php
     include("footer.php");  

?>