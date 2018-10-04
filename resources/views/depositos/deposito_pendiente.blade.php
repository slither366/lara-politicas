@extends('layout')

@section('contenido')

<section class="container" id="pruebita1">
	<div class="mt-0 pt-4 pb-4 mb-0" id="pruebita1">
		<div id="titulo1">DEPOSITO BANCARIO PENDIENTE</div>
	</div>
	<div class="row mt-0 pt-0 mb-0 justify-content-center" id="pruebita1"> <!-- Inicia el margen desde el Top-->
		<div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-10 pb-4" id="pruebita1">
			<div class="card text-white bg-info" id="pruebita1">
				<div class="card-header" id="titH5">DEPOSITO PENDIENTE</div>
				<div class="card-body">
					<div id="titCardTrans" id="pruebita1">
						<h1><span class="badge badge-light"><?php /*echo getCountLocDepPend(2,$_SESSION['dni']);*/?></span></h1>
					</div>
					<div style="text-align: center" id="pruebita1">
						<a class="btn btn-warning btn-lg" id="btnH5" onclick="mostrarDetDepositoPend(<?php /*echo "'".$_SESSION['dni']."'"*/?>);return false;">Ver Detalle</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-1 pb-0" id="pruebita1">
		</div>
		<div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 col-10 pb-4" id="pruebita1">
			<div class="card text-white bg-info" >
				<div class="card-header" id="titH5">DEPOSITADO TARDE</div>
				<div class="card-body">
					<div id="titCardTrans" id="pruebita1">
						<h1><span class="badge badge-light"><?php /*echo getDepositoPendTarde(2,$_SESSION['dni']);*/?></span></h1>
					</div>
					<div style="text-align: center" id="pruebita1">
						<a class="btn btn-warning btn-lg" id="btnH5" onclick="mostrarDetDepositoTarde(<?php /*echo "'".$_SESSION['dni']."'"*/?>);return false;">Ver Detalle</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	

@stop