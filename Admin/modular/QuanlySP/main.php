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
			include('modular/QuanlySP/Them.php');
		}
		if($tam=='Sua')
		{
			include('modular/QuanlySP/Sua.php');
		}
	?>
</div>
<div class="right">
	<?php
		include('modular/QuanlySP/Lietke.php');
	?>
</div>
