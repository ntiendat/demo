<?php
    include("../lib/connection.php");
    $sql = "INSERT INTO khoaphong(ID,Tenkp) VALUES (1, 'CNTT'),(2, 'Cơ khí'),(3, 'Công trình'),(4, 'Kinh tế'),(5,'Kế toán')";
    $query = mysqli_query($conn, $sql); 
?>