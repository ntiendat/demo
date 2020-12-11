
<?php

$servername = "localhost";
$database = "cnw";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$sql = "SELECT * FROM `devvn_quanhuyen` WHERE `matp`=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo '   <option>---chọn Quận Huyện---</option>';
  while($row = $result->fetch_assoc()) {
    
    
   
    echo "<option value='".$row['name']."'   data-data4='".$row['maqh']."' >".$row['name']."</option>";
  }
}




?>
