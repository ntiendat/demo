<?php
   include("../lib/connection.php");
   include('header.php');
  //  $x=$_SESSION['username'];
  //  $sql = "SELECT * FROM `thisinh` WHERE `email`='$x'";
  //  $result = $conn->query($sql);
  //  if ($result->num_rows > 0) {
  //    $row = $result->fetch_assoc();
  //     $email=$row['email'];
  //     echo $email."-".$_SESSION['username'];
     
  //  }
?>



<div class="container mt-3">
  <h2>Tra cứu Hồ sơ sinh viên</h2>
  <p>Type something in the input field to search the table for first names, last names or emails:</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Họ Tên</th>
        <th>Ngày Sinh</th>
        <th>Giới Tính</th>
        <th>Email</th>
        <th>Trường</th>
        <th>Nguyện Vọng 1</th>
        <th>Nguyện Vọng 2</th>
        <th>Nguyện Vọng 3</th>
   
        <th>Action</th>
      </tr>
    </thead>
    <tbody id="myTable">
     <?php
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
          return "<b style='color:red;' >Không Đỗ</b>";
        }
        else{
          return "<b style='color:green;' >  Đỗ</b>";
        }
       
      }
      
      
$sql = "SELECT  * FROM thisinh";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

  // output data of each row
  while($row = $result->fetch_assoc()) {
    $A=$row['toan'] + $row['vat_ly'] + $row['hoa'];
    $A1=$row['toan'] + $row['vat_ly'] + $row['anh'];
    $A2=$row['toan'] + $row['vat_ly'] + $row['sinh'];
    $B=$row['toan'] + $row['hoa'] + $row['sinh'];
    $C=$row['van'] + $row['su'] + $row['dia_ly'];
    $D=$row['van'] + $row['toan'] + $row['anh'];
    echo "<tr>
    <td>".$row['ho']." ".$row['ten']."</td>
    <td>".$row['ngay_sinh']."</td>
    <td>".$row['gioi_tinh']."</td>
    <td>".$row['email']."</td>
    <td>".$row['truong_lop_12']."</td>"; 

    if($row['nguyen_vong_1']!=""){
    echo  "<td>".check($row['doituong'],$row['khuvuc'],$row['nguyen_vong_1'])."</td>";
    }
    else {
      echo "<td>Không Đăng Ký </td>";
    }  if($row['nguyen_vong_2']!=""){
      echo  "<td>".check($row['doituong'],$row['khuvuc'],$row['nguyen_vong_2'])."</td>";
      }
      else {
        echo "<td>Không Đăng Ký </td>";
      }  if($row['nguyen_vong_3']!=""){
        echo  "<td>".check($row['doituong'],$row['khuvuc'],$row['nguyen_vong_3'])."</td>";
        }
        else {
          echo "<td>Không Đăng Ký </td>";
        }

       if ( isset($_SESSION['username']) && (trim($row['email']) ==trim($_SESSION['username']))){
          echo "<td><a href='infoHS.php?id=".$row['id']."'>Xem</a></td> "; 
       }
       else{
         echo "<td></td>";
       }
        

  echo "</tr>";
  }
} 
     
 $conn->close();
     
     ?>
      
    </tbody>
  </table>
  
  
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






<?php
    include('footer.php');
?>