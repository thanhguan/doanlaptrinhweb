<div class="content">
	<?php
		if(isset($_GET['Quanly'])){
			$tam=$_GET['Quanly'];
		} 
		else{ $tam='';}
		if($tam=='QuanlySP'){
			include('modular/QuanlySP/main.php');
		} 
		if($tam=='QuanlyNV'){
			include('modular/QuanlyNV/Main.php');
		} 
		if($tam=='QuanlyDM'){
			include('modular/QuanlyDM/Main.php');
		} 
		if($tam=='QuanlyNCC'){
			include('modular/QuanlyNCC/Main.php');
		}
		if($tam=='Xulyhoadon'){
			include('modular/Xulyhoadon/XulyHD.php');
		}
		if($tam=='donhang'){
			include('modular/QuanlyDH/donhang.php');
		}
		if($tam=='Inhoadon'){
			include('modular/In/Inhoadon.php');
		}
		if($tam=='doanhthu'){
			include('modular/In/doanhthu.php');
		}
	?>
</div>    
<div class="clear"></div>