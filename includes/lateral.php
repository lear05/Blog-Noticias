<!-- BARRA LATERAL -->
<aside id="lateral">

	<?php if(isset($_SESSION['usuario'])): ?>
		<div id="usuario-logueado" class="bloqueo">
			<h3>Bienvenido, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></h3>
			<!--botones-->
			<a href="crear-entradas.php" class="btn btn-outline-success"> <i class="bi bi-plus-square"></i> Crear entradas </a>
			<a href="crear-categoria.php" class="btn btn-outline-primary"><i class="bi bi-plus-circle"></i> Crear categoria</a>
			<a href="mis-datos.php" class="btn btn-outline-warning"><i class="bi bi-person-fill"></i> Mis datos</a>
			<a href="cerrar.php" class="btn btn-outline-danger"> <i class="bi bi-x-circle-fill"></i> Cerrar sesión</a>
		</div>
	<?php endif; ?>


	
<?php if(!isset($_SESSION['usuario'])): ?>		
	<div id="register" class="bloque">
		<h3>Resgistrate</h3>

		<!-- Mostrar errores -->
		<?php if(isset($_SESSION['completado'])): ?>
			<div class="alerta alerta-exito">
				<?=$_SESSION['completado']?>
			</div>
		<?php elseif(isset($_SESSION['errores']['general'])): ?>
			<div class="alerta alerta-error">
				<?=$_SESSION['errores']['general']?>
			</div>
		<?php endif; ?>

		<form class="col-auto" action="registro.php" method="POST">
		
		<div class="row g-3 align-items-center">
			<div class="col-auto">
				<label for="nombre" class="col-form-label">Nombre</label>
			</div>

			<div class="col-auto">
				<input class="form-control" type="text" name="nombre" >
			</div>
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>
			
			<div class="col-auto">
				<label for="apellidos" class="col-form-label">Apellidos</label>
			</div>

			<div class="col-auto">
				<input  class="form-control" type="text" name="apellidos" >
			</div>
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>

			<div class="col-auto">
				<label for="email" class="col-form-label">Email</label>
			</div>

			<div class="col-auto">
				<input  class="form-control" type="email" name="email" >
			</div>
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>

			<div class="col-auto">
				<label for="password" class="col-form-label">Contraseña</label>
			</div>

			<div class="col-auto">
				<input  class="form-control" type="password" name="password"  >
			</div>
			<?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>

			<div class="col-auto">
				<input  class="btn btn-outline-success" type="submit" name="submit" value="Registrar"   >
			</div>

		</div>


		</form>
		<?php borrarErrores(); ?>
	</div>
	
</aside>
<?php endif; ?>