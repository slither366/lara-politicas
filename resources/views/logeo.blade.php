<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">	
	<!--<script src="/node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>-->
	<!--<script src="/js/app.js" crossorigin="anonymous"></script>-->
	<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>

	<style>

		.slider{
			height: 100vh;
			background: #b0ecff;
			background-size: cover;
			background-position: center;
		}

	</style>
</head>
<body>

	<div class="container">
		<div class="row slider align-items-center justify-content-center">

			<div class="card border-white">
				<div class="card-header bg-primary text-center">
					<h5 class="card-title font-weight-light text-light">Iniciar Sesion</h5>
				</div>

				<div class="card-body">

					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

					<form id="loginform" class="form-horizontal" role="form" action="<?php /*$_SERVER['PHP_SELF']*/ ?>" method="POST" autocomplete="off">
						<div class="form-group">
							<label for="">Usuario:</label>
							<input id="usuario" type="text" placeholder="usuario o email" class="form-control" name="usuario" value="" >
						</div>

						<div class="form-group">
							<label for="">Contraseña:</label>
							<input id="password" type="password" placeholder="password" class="form-control" name="password" >
						</div>

						<div class="form-group d-flex justify-content-center">
							<button id="btn-login" type="submit" class="btn btn-success">Iniciar Sesion</button>
						</div>
					</form>
					<?php
						/*echo resultBlock($errors);*/
					?>	
					<div class="d-flex justify-content-end">
						<span class="badge badge-pill badge-warning"><a href="recupera.php" class="text-white">Recuperar Password!</a></span>
					</div>					
				</div>
			</div>
		</div>
	</div>

</body>
</html>