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
			include('modular/QuanlyDM/Them.php');
		}
		if($tam=='Sua')
		{
			include('modular/QuanlyDM/Sua.php');
		}
	?>
</div>
<div class="right">
	<?php
		include('modular/QuanlyDM/Lietke.php');
	?>
</div>
