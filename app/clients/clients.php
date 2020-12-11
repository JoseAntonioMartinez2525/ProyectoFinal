<<?php 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Clients</title>
		<link rel="stylesheet" type="text/css" href="../home/css/style.css">

	<!--icono para la pestaña-->
	<link rel="shortcut icon" href="../home/img/film.png">

	<!--fontawesome-->
	<script src="https://kit.fontawesome.com/c8e4d183c2.js" ></script>
</head>
<body>
<!--nav-->
	<nav style="margin-bottom: 20px;">
	<!--logo-->
	<a class="logo" href="#">	
		<img src="../home/img/logo.png">
	</a>
	<!--menu-->
	<ul class="menu">
		<li><a href="<?=BASE_PATH?>in/">Home</a></li>
		<li><a href="<?=BASE_PATH?>graf/">trailers</a></li>
		<li><a href="<?=BASE_PATH?>detalles/">Details</a></li>

	</ul>
	<!--search-->
	<div class="search">
		<input type="text" placeholder="Find your movie">
		<i class="fas fa-search"></i>
	</div>
	<dic class="user">
		<label style="color: white; font-weight: bold;">Client</label>		
        <a href="<?=BASE_PATH?>log/">
		<i style="float: right;cursor: pointer;" title="Cerrar sesión" class="fas fa-power-off"></i></a>
		
	</div>
	</nav><br><br><br><br><br>

</body>
</html>