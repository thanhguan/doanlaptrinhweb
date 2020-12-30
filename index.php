<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="Style/css.css"/>
<script type="text/javascript" src="/webbanhang/js/jquery_321/jquery_321/jquery-3.2.1.js"></script>
<script type="text/javascript" src="/webbanhang/js/silde.js"></script>
<title>webbanhang</title>
</head>
<body>
	<div class="wrapper">
   <?php
   @session_start();	
    include('Admin/modular/config.php');
	include('blocks/menu.php');
	include('Eployees/modular/config.php');
	include('blocks/banner.php');
	include('blocks/content.php');
	include('blocks/footer.php');
   ?>
	</div>
</body>
</html>