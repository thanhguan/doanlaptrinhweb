<?php
	include('../config.php');
	$MaNV=$_POST['MaNV'];
	$TenNV=$_POST['TenNV'];
	$Cmnd=$_POST['Cmnd'];
	$Sdt=$_POST['Sdt'];
	$Bophan=$_POST['Bophan'];
	$Mucluong=$_POST['Mucluong'];
	$Matkhau=$_POST['Matkhau'];
	$nv=$_GET['MaNV'];
		if(isset($_POST['Them']))
	{
		//thêm 
		$sql="insert into nhanvien (MaNV,TenNV,Cmnd,Sdt,Bophan,Mucluong,Matkhau)
		 values('$MaNV','$TenNV','$Cmnd','$Sdt','$Bophan','$Mucluong','$Matkhau')";
		 if(!mysqli_query($conn,$sql)){
		  die('Lỗi sql: '.mysqli_error($conn));}
		 header('location:../../index.php?Quanly=QuanlyNV&action=Them');
	}
	  elseif (isset($_POST['Sua'])) {
		  //sửa
		   $sql="update nhanvien set MaNV='$MaNV',TenNV='$TenNV',Cmnd='$Cmnd',Sdt='$Sdt',Bophan='$Bophan' ,Mucluong='$Mucluong', Matkhau='$Matkhau' where MaNV='$nv'";
           mysqli_query($conn, $sql);
           header('location:../../index.php?Quanly=QuanlyNV&action=Sua&MaNV='.$MaNV);
 	}
    else{
		//xoá
  $sql=" delete  from nhanvien where MaNV='$nv'";
  mysqli_query($conn,$sql);
  header('location:../../index.php?Quanly=QuanlyNV&action=Them');
   }
?>
