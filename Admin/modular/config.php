<?php
 $tenmaychu='localhost';
 $tentaikhoan='root';
 $pass='';
 $csdl='cf';
 $conn=mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl);
 mysqli_select_db($conn,$csdl);
?>
