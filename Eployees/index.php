<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style/css.css"/>
<title>Eployees</title>
</head>
<body>
<?php 
	session_start();
	if(!isset( $_SESSION['dangnhap'])){
		header('location:login.php');
	}
?>
	<div class="wrapper">
 		<?php
			include('modular/header.php');
			include('modular/menu.php');
			include('modular/content.php');
			include('modular/footer.php');
		?>
    </div>
</body>
</html>