<?php require 'views/header.php'; ?>
	<div class="contenedor">
		<?php foreach ($posts as $post): ?>
		<div class="post">
		<article>
				<h2 class="titulo"><a href="single.php?id=<?php echo $post['ID'];?>"><?php echo $post['titulo'];?></a></h2>
				<p class="fecha"><?php echo $post['fecha'];?></p>
				<div class="thumb">
					<a href="single.php?id=<?php echo $post['ID'];?>">
						<img src="<?php echo RUTA;?>/imagenes/<?php echo $post['thumb'];?>">
					</a>
				</div>
				<p class="extracto"><?php echo $post['extracto'];?> </p>
				<a href="single.php?id=<?php echo $post['ID'];?>" class="continuar">Continuar Leyendo</a>
			</article> 
		</div>	
		<?php endforeach;?>

	<?php require 'paginacion.php'; ?>
	</div>	
<?php require 'views/footer.php';?>
