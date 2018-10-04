@extends('layout')

@section('contenido')

<div class="linkCorreo">
	<div >
		<a onclick="mostrarEnvioCorreo();return false;" id="linkCorreo1"><img src="{{ asset('img/mail.svg') }}"></a>
	</div>
</div>	

<section class="container" id="pruebita1">
	<div class="mt-0 pt-4 pb-4 mb-0" id="pruebita1">
		<div id="titulo1">REMESAS FUERA DE RANGO</div>
	</div>
	<div class="row mt-0 pt-0 mb-0 justify-content-center" id="pruebita1"> <!-- Inicia el margen desde el Top-->

		<?php
		/*if ($nomMesRemesas){ 
			foreach($nomMesRemesas as $dato) {*/
				?>			
				<div class="col-xl-3 col-lg-4 col-md-5 col-sm-5 col-10 pb-4" id="pruebita1">
					<div class="card text-white bg-info" id="pruebita1">
						<div class="d-flex flex-row card-header pb-2 pt-2" id="pruebita1">
							<div class="d-flex " id="titH5" style="width:80%;">
								<?php/*
								echo strtoupper($dato["mes"]);*/
								?>
							</div>
							<div class="" id="pruebita1" style="width:20%;text-align: right;">
								<span class="badge badge-light" style="font-size: 18px;">
									<?php /*echo getCountLocRemesasMes(3,$dato["numMes"],'');*/?></span>
								</div>

							</div>
							<div class="card-body" id="pruebita1">
								<div id="titCardTrans" id="pruebita1">

								</div>
								<div style="text-align: center" id="pruebita1">
									<a class="btn btn-warning btn-lg" id="btnH5" style="width: 95%;" onclick="mostrarDetLocRemesasPend(''<?php /*echo "'".$_SESSION['dni']."'"*/?>,''<?php /*echo $dato["numMes"];*/?>);return false;">Ver Locales</a>
								</div>
							</div>
						</div>
					</div>

					<?php/*
				}
			} else {
				echo "No se encontraron datos";
			}*/
			?>

		</div>
</section>

<section class="container" id="section1" ></section>

<section class="container2" id="section2"></section>

<section class="container3" id="frmCorreo"></section>

@endsection

@section('script')

<script type="text/javascript">
	var titCorreo = "";
	var desCorreo = "";

	function mostrarDetLocRemesasPend(dni_zonal,num_mes){
		$("#frmCorreo").hide();
		var parametros = {
			"jefeDestino" : dni_zonal,
			"pMonth" : num_mes
		};
		$.ajax({
			data:  parametros,
			url:   'detRemesasFueraRango.php',
			type:  'post',
			beforeSend: function () {
				alert("Procesando, espere por favor Procesando...");
		},
		success:  function (response) {
			$("#section1").html(response);
		}
	});
	}
</script>

@endsection