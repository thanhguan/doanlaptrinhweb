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
			include('modular/QuanlyNCC/Them.php');
		}
		if($tam=='Sua')
		{
			include('modular/QuanlyNCC/Sua.php');
		}
	?>
</div>
<div class="right">
	<?php
		include('modular/QuanlyNCC/Lietke.php');
	?>
</div>
