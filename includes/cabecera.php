<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>

<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Blog de Noticias</title>
		<link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	</head>
	<body>
		<!-- CABECERA -->
		<header >
			<!-- LOGO -->
		
			
			<!-- MENU -->
			<nav  id="menu" class="navbar navbar-expand-lg navbar-ligth bg-dark p-3 fixed-top">
				<div class="container-fluid">
						
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
				
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ms-auto h5">
							<li class="nav-item">
								<a class="nav-link text-white" href="index.php">Inicio</a>
							</li>

							<li class="nav-item"> 
							<?php 
								$categorias = conseguirCategorias($db);
								if(!empty($categorias)):
									while($categoria = mysqli_fetch_assoc($categorias)): 
							?>
										<li>
											<a class="nav-link text-white" href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?> </a>
										</li>
							<?php
									endwhile;
								endif;
							?>	
							</li>						
						</ul>
									<?php if(!isset($_SESSION['usuario'])): ?> 	<?php // cuando usuario se loguea desaparece formulario ?>
										<div id="login" class="container-fluid">											
											<?php if(isset($_SESSION['error_login'])): ?>
												<div class="alerta alerta-error">
													<?=$_SESSION['error_login'];?>
												</div>
											<?php endif; ?>

											<form class="row gy-2 gx-3"  action="login.php" method="POST">	

											<div class="col-auto">							
												<label class="visually-hidden" for="email">email</label>
												<div class="input-group">
												<div class="input-group-text">@</div>
												<input type="text" class="form-control"  name="email" id="email" placeholder="email">
												</div>
											</div>						

											<div class="col-auto">
													<label  class="visually-hidden" for="password">Contraseña</label>
													<input type="password" class="form-control" name="password"placeholder="contraseña" />													
											</div>
											
											<div class="col-auto">
												<input class="btn btn-outline-success" type="submit" value="Entrar" />
											</div>
											
												
											</form>
										</div>
									<?php endif; ?>


						<div id="buscador" >
							<form action="buscar.php" method="POST" class="d-flex" role="search">
								<input class="form-control me-2" type="text" name="busqueda" />
								<input class="btn btn-outline-success" type="submit" value="Buscar" />
							</form>
						</div>

					</div>
				</div>
			</nav>
			
		
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
			
		</header>
		
		