<div class="content">
	<?php
		if(isset($_GET['Quanly'])){
			$tam=$_GET['Quanly'];
		} 
		else{ $tam='';}
			if($tam=='donhang'){
				include('modular/QuanlyDH/donhang.php');}	
		

	?>
</div>    
<div class="clear"></div>