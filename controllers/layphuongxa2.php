
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
$sql = "SELECT * FROM `devvn_xaphuongthitran` WHERE `maqh`=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo '   <option>---chọn Phường Xã---</option>';

  while($row = $result->fetch_assoc()) {
    
    
    // echo "<option value='".$row['xaid']."' >".$row['name']."</option>";
    echo "<option value='".$row['name']."'  >".$row['name']."</option>";

  }
}




?>