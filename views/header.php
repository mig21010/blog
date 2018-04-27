<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no,
	 initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8">
	 <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	 <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

 	<link rel="stylesheet" type="text/css" href="<?php echo RUTA;?>/css/estilos1.css">
	<title>Blog</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<div class="logo izquierda">
				<p><a href="<?php echo RUTA; ?>">Mi primer Blog</a></p>
			</div>
			<div class="derecha">
				<form name="busqueda" class="buscar" action="<?php echo RUTA;?>/buscar.php" method="get">
					<input type="texto" name="busqueda" placeholder="Buscar">
					<button type="submit" class="icono fa fa-search"></button>
				</form>
					<nav class="menu">
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#">Contactooooo<i class="icono fa fa-envelope"></i></a></li>
					</nav>
			</div>
		</div>
	</header>
