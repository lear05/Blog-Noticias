<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>	
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Crear categorias</h1>
	<p>
		Añade nuevas categorias al blog para que los usuarios puedan
		usarlas al crear sus entradas.
	</p>
	<br/>
	<form action="guardar-categoria.php" method="POST">
		
					<div class="row g-3 align-items-center">

						<div class="col-auto">
							<label for="nombre" class="col-form-label">Nombre de la categoría</label>
						</div>

						<div class="col-auto">
							<input  class="form-control"type="text" name="nombre" >
						</div>

						<div class="col-auto">
							<button type="submit" value="Guardar" class="btn btn-outline-success">
								<i class="bi bi-plus-square-fill"></i>
								Guardar
							</button>
						</div>

				</div>
		
		
	</form>

</div> <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>

