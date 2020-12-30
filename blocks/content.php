<div class="content">
 	<?php
		if(isset($_GET['xem']))
			{
			$tam=$_GET['xem'];
			}
			else { $tam='';}
			if($tam=='chitietsanpham'){
				include('blocks/main/chitietsanpham.php');}	
			elseif($tam=='chitietmotsanpham'){
				include('blocks/main/chitietmotsanpham.php');}	
			elseif($tam=='giohang'){
				include('blocks/main/giohang.php');}	
			elseif(isset($_POST['search'])){
				include('blocks/main/timkiem.php');}	
			elseif($tam=='dangky'){
				include('blocks/main/dangky.php');}
			elseif($tam=='xulyphieudat'){
				include('blocks/main/xulyphieudat.php');}
			elseif($tam=='dangnhap'){
				include('blocks/main/dangnhap.php');}
			elseif($tam=='tatcasanpham'){
				include('blocks/main/tatcasanpham.php');}
			else{	
				include('blocks/main/sanphamall.php');}
					
	?>
 </div>
