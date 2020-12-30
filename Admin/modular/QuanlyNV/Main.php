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
			include('modular/QuanlyNV/Them.php');
		}
		if($tam=='Sua')
		{
			include('modular/QuanlyNV/Sua.php');
		}
	?>
</div>
<div class="right">
	<?php
		include('modular/QuanlyNV/Lietke.php');
	?>
</div>

