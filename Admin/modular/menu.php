<?php 
	if(isset($_GET['ac']) && $_GET['ac']=='logout'){
		unset($_SESSION['login']);
		header('location:login.php');
		}
?>

 <div class="menu">
        	<ul>
                <li><a href="index.php?Quanly=QuanlyDM&action=Them">QUẢN LÝ DM</a></li>
                <li><a href="index.php?Quanly=QuanlyNCC&action=Them">QUẢN LÝ NCC</a></li>
                <li><a href="index.php?Quanly=QuanlySP&action=Them">QUẢN LÝ SẢN PHẨM  </a></li>
                <li><a href="index.php?Quanly=QuanlyNV&action=Them">QUẢN LÝ NV</a></li>
               <li><a href="index.php?Quanly=Xulyhoadon">XỬ LÝ ĐƠN HÀNG</a></li>
                <li><a href="index.php?Quanly=donhang">QUẢN LÝ ĐƠN HÀNG</a></li>
                <li><a href="index.php?Quanly=doanhthu">DOANH THU</a></li>
                <li><a href="index.php?ac=logout">ĐĂNG XUẤT</a></li>
            </ul> 
        </div>