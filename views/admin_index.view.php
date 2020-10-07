<?php 
require '../views/header.php';
?>

	<div class="contenedor">
		<a href="nuevo.php" class="btn">Nuevo Post</a>
		<a href="cerrar.php" class="btn">Cerrar Sesion</a>
		<h2>Panel de Control</h2>
		<?php foreach ($posts as $post ): ?>
		<div class="post">
			<article>
				<h2 class="titulo"><?php echo $post['id'].' .- '.$post['titulo']; ?></h2>
				<a href="editar.php?id=<?php echo $post['id']; ?>" title="">Editar</a>
				<a href="../single.php?id=<?php echo $post['id']; ?>" title="">Ver</a>
				<a href="borrar.php?id=<?php echo $post['id']; ?>" title="">Borrar</a>
			</article>
		</div>	
		<?php endforeach ?>


				
		<?php 
		require '../paginacion.php';
		?>
	</div>

<?php require 'footer.php'; ?>
</body>
</html>