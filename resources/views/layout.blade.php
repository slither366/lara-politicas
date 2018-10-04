<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-expand-md navbar-expand-lg navbar-dark sticky-top mt-0 pt-0 pb-0 mb-0" id="pruebita1">

		<a class="navbar-brand pt-0 mt-0 mb-0 pb-0" href="{{route('principal')}}" id="pruebita1">
			<img src="images/LogoFP.png" class="imgLogo d-inline-block align-top" alt="Logo" id="pruebita1" style="width: 150px;">
		</a>

		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav mr-auto ml-auto text-center">
				<a class="nav-item nav-link active" href="{{route('principal')}}" id="active">Inicio</a>

				<?php /*if($_SESSION['tipo_usuario']==1) { */?>
				<a class="nav-item nav-link" href="#" id="active">Registrar Usuario</a>
				<?php /*}*/ ?>
			</div>
		</div>  
		<div class="d-flex justify-content-around text-white">
			<?php /*echo 'Bienvenid@:'.$datos;*/ ?>
		</div>			
		<div class="d-flex justify-content-around">
			<a href="logout.php" class="btn btn-danger border-white">Cerrar Sesi&oacute;n</a>
		</div>		
	</nav>	

	@yield('contenido')
</body>
</html>