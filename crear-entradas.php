<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>	
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Crear entradas</h1>
	<p>
		Añade nuevas entradas al blog para que los usuarios puedan
		leerlas y disfrutar de nuestro contenido.
	</p>
	<br/>
	<form action="guardar-entrada.php" method="POST" enctype="multipart/form-data">
		<label for="titulo">Titulo:</label>
		<input type="text" name="titulo" />
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'titulo') : ''; ?>
		
		<label for="descripcion">Descripción:</label>
		<textarea name="descripcion"></textarea>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
		
		<label for="categoria">Categoría</label>
		<select name="categoria">
			<?php 
				$categorias = conseguirCategorias($db); 
				if(!empty($categorias)):
				while($categoria = mysqli_fetch_assoc($categorias)): 
			?>
				<option value="<?=$categoria['id']?>">
					<?=$categoria['nombre']?>
				</option>
			<?php
				endwhile;
				endif;
			?>
		</select>
		<label for="imagen">Imagen</label>
		<input type="file" name="imagen">
		
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarError($_SESSION['errores_entrada'], 'categoria') : ''; ?>
		
		<input type="submit" value="Guardar" class="btn btn-outline-success" />
	</form>
	<?php borrarErrores(); ?>
</div> <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>