<?php 
require 'views/header.php';
?>

<div class="contenedor">
	<div class="post">
		<article>
			<center><h1>Test Vocacional Ceprevi</h1><br></center>
			<h2 class="titulo">Registro de Datos </h2><br>
			<form class="formulario" method="post" action="test.php">
				<input type="text" name="nombre" placeholder="Apellidos y Nombres" required>
				<input type="email" name="correo" placeholder="Correo Electrónico" required>
				<input type="text" name="telefono" placeholder="Telefono" required>
				<input type="text" name="distrito" placeholder="Distrito" required>
				<input type="submit" value="Ingresar al test">
			</form>
		</article>	
	</div>
</div>

<?php require 'footer.php'; ?>
</body>
</html>