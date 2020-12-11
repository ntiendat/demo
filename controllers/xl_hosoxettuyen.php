<?php
// if($_POST){
//    header('Location: xethocba.php');
// }
 error_reporting(E_ALL);
   
   include("../lib/connection.php");
   date_default_timezone_set("Asia/Ho_Chi_Minh");
   include("../storage/PHPMailer-master/src/PHPMailer.php");
   include("../storage/PHPMailer-master/src/Exception.php");
   include("../storage/PHPMailer-master/src/OAuth.php");
   include("../storage/PHPMailer-master/src/POP3.php");
   include("../storage/PHPMailer-master/src/SMTP.php");
   // date_default_timezone_set("Asia/Ho_Chi_Minh");

   $date = date("d/m/Y h:i:a");
   
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   include("header.php");  
   // include("phpunit.php");
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
        return "<b style='color:red;' >Bạn Không trúng tuyển ".$tennganh." !!!</b><br>";
      }
      else{
        return "<b style='color:green;' >  Chúc mừng bạn đã trúng tuyển ".$tennganh." !!!</b><br>";
      }
     
    }
   $ho                = $_POST['ho'];
   $ten               = $_POST['ten'];
   $ngaysinh          = $_POST['ngaysinh'];
   $CMND              = $_POST['CMND'];
   $gioitinh          = $_POST['gioitinh'];
   $SDT               = $_POST['SDT'];
   $email             = $_POST['email'];
   $khuvucuutien      = $_POST['khuvucuutien'];
   $doituonguutien    = $_POST['doituonguutien'];
   $thanhphothuongtru = $_POST['thanhphothuongtru'];
   $quanhuyenthuongtru= $_POST['quanhuyenthuongtru'];
   $phuongxathuongtru = $_POST['phuongxathuongtru'];
   $diachithuongtru   = $_POST['diachithuongtru'];
   
   if(isset($_POST['liketop'])){
      $diachitamtru=$diachithuongtru;
      $thanhphotamtru=$thanhphothuongtru;
      $quanhuyentamtru=$quanhuyenthuongtru;
      $phuongxatamtru=$phuongxathuongtru;
   }
   else{
      $thanhphotamtru    = $_POST['thanhphotamtru'];
      $quanhuyentamtru   = $_POST['quanhuyentamtru'];
      $phuongxatamtru    = $_POST['phuongxatamtru'];
      $diachitamtru      = $_POST['diachitamtru'];
   }
  
   $truong12          = $_POST['truong12'];
   $matruonglop12     = $_POST['matruonglop12'];
   $matinhlop12       = $_POST['matinhlop12'];
   $hanhkiemlop12     = $_POST['hanhkiemlop12'];
   $hocluclop12       = $_POST['hocluclop12'];
   $namtotnghiep      = $_POST['namtotnghiep'];
   $nguyenvong1        = $_POST['nguyenvong1'];
   $nguyenvong2=null;
   $nguyenvong3=null;
   if(isset($_POST['nguyenvong2'])){
      $nguyenvong2        = $_POST['nguyenvong2'];
   }
   if(isset($_POST['nguyenvong3'])){
      $nguyenvong3        = $_POST['nguyenvong3'];
   }
 
 
   $toan              = $_POST['toan'];
   $van               = $_POST['van'];
   $anh               = $_POST['anh'];
   $vatly             = $_POST['vatly'];
   $hoa               = $_POST['hoa'];
   $sinh              = $_POST['sinh'];
   $su                = $_POST['su'];
   $dia               = $_POST['dia'];
   $GDCD              = $_POST['GDCD'];
  

   $A=$toan + $vatly + $hoa;
   $A1=$toan + $vatly + $anh;
   $A2=$toan + $vatly + $anh;
   $B=$toan + $hoa + $sinh;
   $C=$van + $su + $dia;
   $D=$van + $toan + $anh;

   if(isset($_FILES["anhthe"])==true){
      // echo 'tồn tại';
  }
  else{
   echo "<script type='text/javascript'>alert('Không thành công'); window.location='xethocba.php'</script>";

   // header('Location: xethocba.php');

  }
  $uploads_dir1 = "../upload";
  foreach ($_FILES["anhthe"]["error"] as $key => $error){
      if ($error == UPLOAD_ERR_OK) {
          $tmp_name1 = $_FILES["anhthe"]["tmp_name"][$key];
              // basename() may prevent filesystem traversal attacks;
              // further validation/sanitation of the filename may be appropriate
          $name1 = basename($CMND.'anhthe.jpg');
          move_uploaded_file($tmp_name1, "$uploads_dir1/$name1");
          $nameFile1 = "$uploads_dir1/$name1";
      //  echo $nameFile1 ;

      }

  }
// upload($uploads_dir1,$CMND,'anhthe');

  if(isset($_FILES["hocba"])==true){
 
}
else{
   echo "<script type='text/javascript'>alert('Không thành công'); window.location='xethocba.php'</script>";


   // header('Location: xethocba.php');
}

$uploads_dir2 = "../upload";

foreach ($_FILES["hocba"]["error"] as $key => $error){
   if ($error == UPLOAD_ERR_OK) {
       $tmp_name2 = $_FILES["hocba"]["tmp_name"][$key];
           // basename() may prevent filesystem traversal attacks;
           // further validation/sanitation of the filename may be appropriate
       $name2 = basename($CMND.'hocba.pdf');
       move_uploaded_file($tmp_name2, "$uploads_dir2/$name2");
       $nameFile2 = "$uploads_dir2/$name2";
      //  echo $nameFile2 ;
   }

}
// upload($uploads_dir2,$CMND,'hocba');



   $sql = "INSERT INTO `thisinh`(  `ho`, `ten`, `ngay_sinh`, `CMND`, `gioi_tinh`, `SDT`, `email`, `khuvuc`, `doituong`, `tinh_thuong_tru`, `quan_huyen_thuong_tru`, `phuong_xa_thuong_tru`, `dia_chi_thuong_tru`, `tinh_tam_tru`, `quan_huyen_tam_tru`, `phuong_xa_tam_tru`, `dia_chi_tam_tru`, `truong_lop_12`, `ma_truong_lop_12`, `ma_tinh_lop_12`, `hanh_kiem_lop_12`, `hoc_luc_lop_12`, `nam_tot_nghiep`, `nguyen_vong_1`,`nguyen_vong_2`,`nguyen_vong_3`, `toan`, `van`, `anh`, `vat_ly`, `hoa`, `sinh`, `su`, `dia_ly`, `GDCD`, `hinh_anh`, `hoc_ba`) VALUES ('$ho', '$ten', '$ngaysinh',$CMND,'$gioitinh','$SDT','$email','$khuvucuutien','$doituonguutien','$thanhphothuongtru','$quanhuyenthuongtru','$phuongxathuongtru','$diachithuongtru','$thanhphotamtru','$quanhuyentamtru','$phuongxathuongtru','$diachitamtru','$truong12',$matruonglop12,$matinhlop12,'$hanhkiemlop12','$hocluclop12',$namtotnghiep ,'$nguyenvong1','$nguyenvong2','$nguyenvong3',$toan,$van,$anh,$vatly,$hoa,$sinh,$su,$dia,$GDCD,'$nameFile1','$nameFile2')";
  if ($conn->query($sql) === TRUE) {
   echo "    <h2> Nộp học bạ thành công </h2>
   <p style='text-'>Kiểm tra mail từ 3-4 ngày để xác nhận nhập học</p>";
   $sql ="INSERT INTO `lichsu`( `tac_vu`, `thoi_gian`, `nguoi_thuc_hien`) VALUES ('Thêm Hồ Sơ','$date','$email')";
   if ($conn->query($sql) === TRUE) {
   
     }


   } else {
   echo "<script type='text/javascript'>alert('Thêm hồ sơ Không thành công'); window.location='xethocba.php'</script>";

      // header('Location: xethocba.php');
    
   }
    $sql ="INSERT INTO `taikhoan`(`email`, `pass`, `role`) VALUES ('$email','$SDT',0)";
    if ($conn->query($sql) === TRUE) {
      
      }

     
     
        
        $mail = new PHPMailer(true); // Passing `true` enables exceptions
        try{
        //Server settings
        $mail->SMTPDebug = 0; 
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com;'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'nguyentiendat099912c1@gmail.com'; // SMTP username
        $mail->Password = 'thptyla12c1'; // SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587; // TCP port lớn connect to
        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom('nguyentiendat099912c1@gmail.com', 'Đại Học Thủy Lợi');
        $mail->addAddress($email, $ho." ".$ten ); // Add a recipient
        // $mail->addAddress('ellen@example.com'); // Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
        //Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Thông Báo Kết Quả Xét Tuyển Online';
        $bd= "Thông Báo Kết Quả Xét Tuyển  Họ Tên :".$ho." ".$ten." <br> ".check($doituonguutien,$khuvucuutien ,$nguyenvong1);
        if(isset($_POST['nguyenvong2'])){
            $bd   = $bd.check($doituonguutien,$khuvucuutien ,$nguyenvong2);
          }
         if(isset($_POST['nguyenvong3'])){
            $bd   = $bd.check($doituonguutien,$khuvucuutien ,$nguyenvong3);
         }
    
        $mail->Body = $bd;
      //   $mail->Body = "Thông Báo Kết Quả Xét Tuyển  Họ Tên :".$ho." ".$ten." </br> Chúc mừng bạn đã trúng tuyển !!!";
        $mail->AltBody = 'This is the body in plain text for non-HTML email clients';
        $mail->send();
     
        }
        catch (Exception $e){
         echo "<script type='text/javascript'>alert('gửi mail Không thành công'); window.location='xethocba.php'</script>";

         // header('Location: xethocba.php');

        }





























 $conn->close();

 ?>

 
 <?php
     include("footer.php");  

?>
<!-- $ho, $ten, $ngaysinh,$CMND,$gioitinh,$SDT,$email,$khuvucuutien,$doituonguutien,$thanhphothuongtru,$quanhuyenthuongtru
   ,$phuongxathuongtru,$diachithuongtru,$thanhphotamtru,$quanhuyentamtru,$phuongxathuongtru,$diachitamtru
   ,$truong12,$matruonglop12,$matinhlop12,$hanhkiemlop12,$hocluclop12,$namtotnghiep
   ,$nguyenvong,$toan,$van,$anh,$vatly,$hoa,$sinh,$su,$dia,$GDCD,$anhthe,$hocba -->