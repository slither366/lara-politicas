@extends('layouts.app')

@section('content')

<div id="overlay"></div>

<div class="alertita1" style="display:none;">
	<div class="row justify-content-center">
		<div class="col col-xl-4 col-lg-4 col-md-5 col-sm-6 col-10 text-center alert alert-success" role="alert" id="divAlertInt1">
			Enviar Correo a C54.
		</div>
	</div>
</div>

<div class="alertita2" style="display:none;">
	<div class="row justify-content-center">
		<div class="col col-xl-4 col-lg-4 col-md-5 col-sm-6 col-10 text-center alert alert-warning" role="alert" id="divAlertInt2">
			Se esta enviando el Correo...
		</div>
	</div>
</div>

<div class="linkCorreo">
	<div >
		<a onclick="armarListaCorreos();return false;"><img src="{{ asset('img/mail.svg') }}" id="imgCorreo"></a>
	</div>
</div>

<section class="container">

	<div class="pl-4 mt-4 pt-0">
		<h1 class="text-center Titulo">Guias de Transferencias Pendientes</h1>
	</div>

	<div>
		<div class="lead text-right SubTitulo mt-0 pt-0">Total Guias Pend.: <strong><?php /*echo $totalGuias*/?></strong></div>
		<div class="lead text-right SubTitulo mt-0 pt-0">N° Locales Pend.: <strong><?php /*echo $totCantLoc*/?></strong></div>
	</div>

	<div class="row">
		<?php
		/*if ($datosTransPendDet){ 
			foreach($datosTransPendDet as $dato) {
				*/?>
				<div class="col-sm-6 col-md-4 col-lg-4 mt-3 pt-0">
					<div class="card">

						<div class="card-header bg-success text-white d-flex">
							<div >
								De: <?php /*echo $dato["ori"];*/?> a 
								<b class="h4 font-weight-bold text-dark">
									<?php /*echo $dato["dest"];*/?>
								</b>
							</div>
							<div class="flex-grow-1 custom-control custom-checkbox align-middle" style="text-align: right;">
								<!--El input trabaja con el label para enviar datos a la otra pantalla-->
								<input type="checkbox" class="checkbox custom-control-input" 
								id=<?php /*echo "'".$dato['ori'].$dato['dest']."'"*/?> checked="checked" 
								value=<?php /*echo "'".$dato['destCorreo']."'"*/?>
								<label class="custom-control-label" for=<?php /*echo "'".$dato['ori'].$dato['dest']."'"*/?> ></label>
							</div>
						</div>

						<div class="card-body">
							<h5 class="card-title text-secondary">Fech.Crea: <strong>
								<?php /*echo $dato["fech"];*/?>
							</strong></h5>
							<a class="btn btn-warning btn-lg btn-block" onclick="mostrarDetGuias(<?/*php echo "'".$dato['ori']."'"*/?>,<?php /*echo "'".$dato['dest']."'"*/?>,<?php/* echo "'".$_SESSION['dni']."'"*/?>,<?php /*echo "'".$dato['oriDesc']."'"*/?>,<?php /*echo "'".$dato['destDesc']."'"*/?>);return false;" id="btnVerGuias">
								<b class="h6"><strong>Guias Pend: <?php /*echo $dato["tot"];*/?></strong></b>
							</a>
						</div>
					</div>
				</div>                
				<?php/*
			}
		} else {
			echo "No se encontraron datos";
		}
		*/?>
	</div>
</section>

@endsection

@section('script')

<script type="text/javascript">

	function mostrarDetGuias(ori, dest, jefeDest,oriDesc,destDesc){
		var parametros = {
			"origen" : ori,
			"destino" : dest,
			"jefeDestino": jefeDest,
			"oriDesc" : oriDesc,
			"destDesc" : destDesc
		};
		$.ajax({
			data:  parametros,
			url:   'detGuiasTabla.php',
			type:  'post',
			beforeSend: function () {
				$("#wait_1").html("Procesando, espere por favor Procesando...");
			},
			success:  function (response) {
				$("#jbtDetalle").html(response);
			}
		});
	}

	function mostrarEnvioCorreo(mailDest){
		var parametros = {
			"correo_dest" : mailDest
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

	function enviarCorreo(){
		var parametros = {
			"vTitulo" : $("#titulo").val(),
			"vEmails" : $("#emails").val(),
			"vdetCorreo" : $("#detCorreo").val()
		};
		$.ajax({
			data:  parametros,
			url:   'enviarMail.php',
			type:  'post',
			beforeSend: function () {
					//$('#bodyTransfer').block();
					bloquearPantalla();
					$("#divAlertInt2").html("Enviando Correo...");
					$(".alertita2").fadeIn(1000);
				},
				success:  function (response) {
					//$('#bodyTransfer').unblock();
					$(".alertita2").fadeOut(500);
					alertaPantalla("Envío de Correo Exitoso!");
					desbloquearPantalla()
					//$("#frmCorreo").html(response);
				}
			});
	}

	function alertaPantalla(mensaje){
		$("#divAlertInt1").html(mensaje);
		$(".alertita1").fadeIn(2000);
		$(".alertita1").fadeOut(2000);
	}

	function alertaPantalla2(mensaje){
		$("#divAlertInt2").html(mensaje);
		$(".alertita2").fadeIn(3000);
		$(".alertita2").fadeOut(3000);
	}

	function bloquearPantalla(){
		$("#overlay").show();		
	}

	function desbloquearPantalla(){
		$("#overlay").hide();
	}

	$(document).ready(function(){
		$("input:checkbox:checked").click(function() {

			if(($("#"+$(this).attr("id")).is(':checked'))) {
				$local = $(this).attr("id").substring(3,7);
				alertaPantalla("Enviar Mail al" + $local);
			} else {  
						//$("#divAlertInt").html("Cambio!");  
					}  
				});	
	});

	function armarListaCorreos(){
		var correosFrom = "";
		$("input:checkbox:checked").each(function(){
								//alert($(this).val());
								//alert($(this).attr("id"));
								correosFrom = correosFrom + $(this).val() + ";";
							});
					//alert(correosFrom);
					mostrarEnvioCorreo(correosFrom);
				}

				$(window).ready(function(){

					$("input:checkbox:checked").click(function() {
						armarListaCorreos();
					});

				});

</script>

@endsection