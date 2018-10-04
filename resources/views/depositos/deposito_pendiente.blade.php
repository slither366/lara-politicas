@extends('layout')

@section('contenido')

<div class="linkCorreo">
	<div >
		<a onclick="mostrarEnvioCorreo();return false;" id="linkCorreo1"><img src="{{ asset('img/mail.svg') }}" id="imgCorreo"></a>
	</div>
</div>	

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

<section class="container2" id="section2"></section>

<section class="container3" id="frmCorreo"></section>	

@endsection

@section('script')

<script type="text/javascript">
	var titCorreo = "";
	var desCorreo = "";

	function mostrarDetDepositoPend(dni_zonal){
		titCorreo = "Depositos Bancarios Pendientes a la Fecha";
		desCorreo = "Actualmente se verifica que su local cuenta con dinero de cierres no depositados a la fecha, por favor depositarlo a la brevedad y tener mas cuidado ya que se tomarán medidas en caso se siga repitiendo este tipo de falta.";

		$("#frmCorreo").hide();
		var parametros = {
			"jefeDestino" : dni_zonal
		};
		$.ajax({
			data:  parametros,
			url:   'detDepositoPendiente.php',
			type:  'post',
			beforeSend: function () {
			//alert("Procesando, espere por favor Procesando...");
		},
		success:  function (response) {
			$("#section2").html(response);
		}
	});
	}

	function mostrarDetDepositoTarde(dni_zonal){
		titCorreo = "Tener cuidado con los Depositos Bancarios Tardes";
		desCorreo = "Actualmente se verifica que su local se encuentra depositando el dinero del cierre luego del horario mínimo establecido (Hasta las 13:00 día siguiente al Cierre!), favor tener mas cuidado ya que se tomarán medidas en caso se siga repitiendo este tipo de falta.";

		$("#frmCorreo").hide();
		var parametros = {
			"jefeDestino" : dni_zonal
		};
		$.ajax({
			data:  parametros,
			url:   'detDepositoTarde.php',
			type:  'post',
			beforeSend: function () {
			//alert("Procesando, espere por favor Procesando...");
		},
		success:  function (response) {
			$("#section2").html(response);
		}
	});
	}

	function mostrarEnvioCorreo(){
		$("#frmCorreo").show();
		var parametros = {
		"correo_destino" : correosFrom, //esta variable se trae de la web detDepositoTarde.php
		"correo_tit"  : titCorreo,
		"correo_des"  : desCorreo
	};
	$.ajax({
		data:  parametros,
		url:   '../formEnviarCorreo.php',
		type:  'post',
		beforeSend: function () {
			$("#wait_2").html("Procesando, espere por favor Procesando...");
		},
		success:  function (response) {
			$("#frmCorreo").html(response);
		}
	});
}

</script>

@endsection