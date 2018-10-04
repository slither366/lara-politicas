@extends('layout')

@section('contenido')

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

@stop