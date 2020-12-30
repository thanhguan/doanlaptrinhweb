<div class="left">
	<?php
		if(isset($_GET['action']))
		{
			$tam=$_GET['action'];
		}
		else
		{
			$tam='';
		}
		if($tam=='Them'){
			include('modular/QuanlyHoadon/Them.php');
		}
	?>
</div>
<div class="right">
	<?php
		include('modular/QuanlyHoadon/Lietke.php');
	?>
</div>
