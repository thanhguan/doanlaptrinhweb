<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style/css.css"/>
<title>Administration</title>
</head>
<body>
<?php
	session_start();
	if(!isset($_SESSION['login'])){
		header('location:login.php');
	}
?>
	<div class="wrapper">
 		<?php
			include('modular/config.php');
			include('modular/header.php');
			include('modular/menu.php');
			include('modular/content.php');
			include('modular/footer.php');
		?>
    </div>
</body>
</html>