<?php require_once 'includes/cabecera.php'; ?>		

		
<!-- CAJA PRINCIPAL -->
<div class="container" id="primario">
	<div class="row">
		<div class="col-sm-12 col-md-4 col-lg-4 col-xl-10">
			<h1>Todas las noticias</h1>
		
		<?php 
			$entradas = conseguirEntradas($db);
			if(!empty($entradas)):
				while($entrada = mysqli_fetch_assoc($entradas)):
		?>
					<article class="entrada">
						<a href="entrada.php?id=<?=$entrada['id']?>">
							<h2><?=$entrada['titulo']?></h2>
							<span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span></br>
							<img height="160px" src="data:image/jpg;base64, <?php echo base64_encode($entrada['imagen']); ?> " />
							<p>
								<?=substr($entrada['descripcion'], 0, 180)."..."?>
							</p>
							
						</a>
					</article>
		<?php
				endwhile;
			endif;
		?>
		</div>

	</div>
</div>
 <!--fin principal-->
			
<?php require_once 'includes/pie.php'; ?>