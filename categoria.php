<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
	$categoria_actual = conseguirCategoria($db, $_GET['id']);

	if(!isset($categoria_actual['id'])){
		header("Location: index.php");
	}
?>
<?php require_once 'includes/cabecera.php'; ?>

		
<!-- CAJA PRINCIPAL -->
<div class="container" id="primario">
	<div class="row">
		<div class="col-sm-12 col-md-4 col-lg-4 col-xl-10">
			<h1><?=$categoria_actual['nombre']?></h1>
		
		<?php 
			$entradas = conseguirEntradas($db, null, $_GET['id']);

			if(!empty($entradas) && mysqli_num_rows($entradas) >= 1):
				while($entrada = mysqli_fetch_assoc($entradas)):
		?>
					<article class="entrada">
						<a href="entrada.php?id=<?=$entrada['id']?>">
							<h2><?=$entrada['titulo']?></h2>
							<span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span></br>
							<img src="data:image/jpg;base64, <?php echo base64_encode($entrada['imagen']); ?> " />
							<p>
								<?=substr($entrada['descripcion'], 0, 180)."..."?>
							</p>
						</a>
					</article>
		<?php
				endwhile;
			else:
		?>
			<div class="alerta">No hay entradas en esta categoría</div>
		<?php endif; ?>
		</div>

	</div>
</div>

<!--fin principal-->			
<?php require_once 'includes/pie.php'; ?>