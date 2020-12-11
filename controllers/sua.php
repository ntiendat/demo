<?php
if(!isset($_SESSION)){
  
}
   include("../lib/connection.php");
   include("header.php");  
   date_default_timezone_set("Asia/Ho_Chi_Minh");
   $date = date("d/m/Y h:i:a");
  //  include("phpunit.php");  
   if(isset($_POST['ngaysinh']) &&  isset($_POST['SDT']) &&isset($_POST['email'])&&isset($_POST['diachithuongtru'])&&isset($_POST['diachitamtru'])){
  
    $id          = $_POST['id'];
    $ngaysinh          = $_POST['ngaysinh'];

 
   $SDT               = $_POST['SDT'];
   $email             = $_POST['email'];
 
   $diachithuongtru   = $_POST['diachithuongtru'];
  
    $diachitamtru      = $_POST['diachitamtru'];
  

   $sql = "UPDATE `thisinh` SET `ngay_sinh`='$ngaysinh' ,  `SDT`='$SDT ', `email` = '$email ' ,`dia_chi_thuong_tru` = '$diachithuongtru',`dia_chi_tam_tru`='$diachitamtru' WHERE `id`=$id  ";
//   echo $sql;
   if ($conn->query($sql) === TRUE) {
    $sql ="INSERT INTO `lichsu`( `tac_vu`, `thoi_gian`, `nguoi_thuc_hien`) VALUES ('Sửa Hồ Sơ','$date','$email')";
    if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('Sửa thành công');</script>";
      }


      }
    }
 
   
 $id                = $_GET['id'];
function check ($doituong,$vung,$tennganh){
  include("../lib/connection.php");
  $sql = "SELECT * FROM `nguyenvong` WHERE `nguyen_vong`='$tennganh'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
     $a=$row['diem_xet_tuyen'];
     $b=$row['khoi_xet_tuyen'];
  }
    switch ($doituong) {
      case "DT1":
      case "DT2":
      case "DT3":
      case "DT4":
        $doituong =2;
          break;
      case "DT5":
      case "DT6":
      case "DT7" :
        $doituong =1;
          break;
      case "DT0" :
     $doituong =0;
         break;
  }
  switch ($vung) {
    case "KV1":
      $vung =0.75;
         break;
    case "KV2":
      $vung =0.5;
    break;
    case "KV2-NT":
      $vung =0.25;
    break;
    case "KV3":
      $vung =0;
    break;
    
}
    global $A1,$A,$A2,$B,$C,$D;
    switch ($b) {
      case "A":
        $b =$A;
          break;
      case "A1":
        $b =$A1;
          break;
      case "A2":
        $b =$A2;
          break;
      case "B":
        $b =$B;
          break;
      case "C":
        $b =$C;
          break;
      case "D":
        $b =$D;
          break;
  }

  $diemtong=$doituong+$b+$vung;
  if($diemtong<$a){
    return "Không Đỗ";
  }
  else{
    return "Đỗ";
  }
 
}



 $sql = "SELECT  * FROM thisinh WHERE id ='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
    $A=$row['toan'] + $row['vat_ly'] + $row['hoa'];
    $A1=$row['toan'] + $row['vat_ly'] + $row['anh'];
    $A2=$row['toan'] + $row['vat_ly'] + $row['sinh'];
    $B=$row['toan'] + $row['hoa'] + $row['sinh'];
    $C=$row['van'] + $row['su'] + $row['dia_ly'];
    $D=$row['van'] + $row['toan'] + $row['anh'];
 
  ?>
 

<form action="" method="post">
<h2>Thông Tin Hồ Sơ</h2>
    <input type="text" name="id" value="<?php echo $row['id']?>" hidden>
  <div  style="padding-left : 150px; padding-right:150px;"class="info">
    <div class="row">
    <div class="col-md-8  ">

    <h3 class="float-left"> <?php echo $row['ho']." ".$row['ten']?></h3>
   
    <table class="if">
        <tr>
          <th>Ngày Sinh :</th>
          
          <td><input type="text" style="border:0px;width:100%;" name="ngaysinh" value="<?php echo $row['ngay_sinh']?>"></td>
        </tr>
        <tr>
          <th>Giới tính :</th>
          <td><?php echo $row['gioi_tinh']?></td>
        </tr>
        <tr>
          <th>CMND :</th>
          <td><?php echo $row['CMND']?></td>
        </tr>
        <tr>
          <th>SDT :</th>
          <td><input type="text" style="border:0px;width:100%;" name="SDT" value="<?php echo $row['SDT']?>"></td>
        </tr>
        <tr>
          <th>Email :</th>
          <td><input type="text" style="border:0px;width:100%;" name="email" value="<?php echo $row['email']?>"></td>
        </tr>
        <tr>
          <th>Địa chỉ thường trú :</th>
          <td><input type="text" style="border:0px;width:100%;" name="diachithuongtru" value="<?php echo $row['dia_chi_thuong_tru']?>"></td>
        </tr>
        <tr>
          <th>Địa chỉ tạm trú :</th>
          <td><input type="text" style="border:0px;width:100%;" name="diachitamtru" value="<?php echo $row['dia_chi_tam_tru']?>"></td>
        </tr>
        <tr>
          <th>Khu vực :</th>
          <td><?php echo $row['khuvuc']?></td>
        </tr>
        <tr>
          <th>Đối tượng ưu tiên :</th>
          <td><?php echo $row['doituong']?></td>
        </tr>
    </table>

   <hr class="hr">
    <h5 class="float-left">Nguyện Vọng</h5>
    <table class="if-lop12">
      
      <?php
       if($row['nguyen_vong_1']!=""){
        echo "<tr>
        <th> Nguyện vọng 1 :</th>
        <td>". $row['nguyen_vong_1']."</td>
        <td>".check($row['doituong'],$row['khuvuc'],$row['nguyen_vong_1'])."</td>
      </tr>";
      }
        if($row['nguyen_vong_2']!=""){
          echo "<tr>
          <th> Nguyện vọng 2 :</th>
          <td>". $row['nguyen_vong_2']."</td>
          <td>".check($row['doituong'],$row['khuvuc'],$row['nguyen_vong_2'])."</td>
        </tr>";
        }
        if($row['nguyen_vong_3']!=""){
          echo "<tr>
          <th> Nguyện vọng 3 :</th>
          <td>". check($row['doituong'],$row['khuvuc'],$row['nguyen_vong_3'])."</td>
          <td>Đỗ</td>
        </tr>";
        }
      ?>
        
    
    </table>

    <hr class="hr">
    <h5 class="float-left">Thông tin học tập lớp 12</h5>
    <table class="if-lop12">
        <tr>
          <th>Trường Lớp 12 :</th>
          <td><?php echo $row['truong_lop_12']?></td>
        </tr>
        <tr>
          <th>Mã trường 12 :</th>
          <td><?php echo $row['ma_truong_lop_12']?></td>
        </tr>
        <tr>
          <th>Hạnh Kiểm :</th>
          <td><?php echo $row['hanh_kiem_lop_12']?></td>
        </tr>
        <tr>
          <th>Học lực :</th>
          <td>Tốt</td>
        </tr>
    
    </table>
    <hr class="hr">
    <h5 class="float-left">Thông tin học tập</h5>
    <table class="if-diem">
        <tr>
          <th>Toán :</th>
          <td><?php echo $row['toan']?></td>
        </tr>
        <tr>
          <th>Văn :</th>
          <td><?php echo $row['van']?></td>
        </tr>
        <tr>
          <th>Anh :</th>
          <td><?php echo $row['anh']?></td>
        </tr>
        <tr>
          <th>Vật Lý :</th>
          <td><?php echo $row['vat_ly']?></td>
        </tr>
        <tr>
          <th>Hóa :</th>
          <td><?php echo $row['hoa']?></td>
        </tr>
        <tr>
          <th>Sinh :</th>
          <td><?php echo $row['sinh']?></td>
        </tr>
        <tr>
          <th>Sử :</th>
          <td><?php echo $row['su']?></td>
        </tr>
        <tr>
          <th>Địa :</th>
          <td><?php echo $row['dia_ly']?></td>
        </tr>
        <tr>
          <th>GDCD :</th>
          <td><?php echo $row['GDCD']?></td>
        </tr>
    </table>

    <hr class="hr">
    <h5 class="float-left">Điểm các khối xét tuyển</h5>
    <table class="if-lop12">
        <tr>
          <th>Khối A :</th>
          <td><?php echo $A?></td>
        </tr>
        <tr>
          <th>Khối A1 :</th>
          <td><?php echo $A1?></td>
        </tr>
        <tr>
          <th>Khối A2 :</th>
          <td><?php echo $A2?></td>
        </tr>
        <tr>
          <th>Khối B :</th>
          <td><?php echo $B?></td>
        </tr>
        <tr>
          <th>Khối C :</th>
          <td><?php echo $C?></td>
        </tr>
        <tr>
          <th>Khối D :</th>
          <td><?php echo $D?></td>
        </tr>
    
    </table>

    </div>
    <div class="col-md-4">
    <img src="<?php echo $row['hinh_anh']?>" style="width:150px; margin-top:40px;" alt="">
     </div>
     <div class="col-md-6"></div>
     <div class="col-md-2">
     <input type="submit" class="btn btn-primary float-right" value="lưu">
     <!-- <a href="sua.php?id=" style="margin-top:20px;margin-bottom:10px;" class="btn btn-primary float-right">lưu</a> -->
     </div>
    </div>
    
  </div>
  </form>
  <?php

      }
 $conn->close();
 ?>

<?php
     include("footer.php");  

?>