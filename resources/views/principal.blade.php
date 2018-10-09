@extends('layouts.app')

@section('content')
<section class="container">

	<div class="pl-4 mt-4 pt-0">
		<h1 class="text-center Titulo">Politicas Pendientes</h1>
	</div>

	<div class="row mt-4"> <!-- Inicia el margen desde el Top-->

		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 pb-4">
			<div class="card" id="card1">
				<div class="card-body text-white mt-3 pt-0 mb-2 pb-0 ml-2 pl-0 mr-2 pr-0">
					<div class="d-flex flex-row bd-highlight justify-content-between mt-0 pt-0 cardBodyFlex1">
						<div class="d-flex bd-highlight cardBodyFlex2">
							<div class="align-self-center">
								<!--<a><img src= "img/shipped.svg" id="icoImg"></a>-->
                                <img id="icoImg" src="{{ asset('img/shipped.svg') }}">
							</div>
						</div>
						<div class="bd-highlight mt-0 pt-0 cardBodyFlex3">
							<div class="d-flex align-items-end flex-column bd-highlight mt-0 pt-0 cardBodyFlex4">
								<div class="display-4 bd-highlight pt-0 mt-0 cardBodyFlex5">
                                    <?php /*echo getCantGuiasTransPend(1,$_SESSION['dni']); */?></div>
								<div class="mt-auto bd-highlight cardBodyFlex6" id="tit1">Transferencias Pendientes</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card-footer bg-light mt-0 pt-0 mb-0 pb-0" id="etiqueta" 
                    onclick="location.href='{{ route('viewTransferencias') }}';">
					<div class="d-flex flex-row justify-content-between cardFooterFlex1">
						<div class="align-self-center" id="cardDet1">
							Ver Detalle
						</div>
						<div class="align-self-center" id="cardImg1">
							<div class="divImages">
								<a><img id="icoImg2" src="{{ asset('img/right-arrow.svg') }}"></a>
							</div>
						</div>
					</div>
				</div>	

			</div>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 pb-4">
			<div class="card" id="card2">
				<div class="card-body text-white mt-3 pt-0 mb-2 pb-0 ml-2 pl-0 mr-2 pr-0">
					<div class="d-flex flex-row bd-highlight justify-content-between mt-0 pt-0 cardBodyFlex1">
						<div class="d-flex bd-highlight cardBodyFlex2">
							<div class="align-self-center">
								<a><img id="icoImg" src="{{ asset('img/bank.svg') }}"></a>
							</div>
						</div>
						<div class="bd-highlight mt-0 pt-0 cardBodyFlex3">
							<div class="d-flex align-items-end flex-column bd-highlight mt-0 pt-0 cardBodyFlex4">
								<div class="display-4 bd-highlight pt-0 mt-0 cardBodyFlex5">
                                    <?php /*echo getDepositoPendTarde(2,$_SESSION['dni']); */?></div>
								<div class="mt-auto bd-highlight cardBodyFlex6" id="tit1">Deposito Bancario Pendiente</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer bg-light mt-0 pt-0 mb-0 pb-0" id="etiqueta" 
                    onclick="location.href='{{ route('viewDepositos') }}';">
					<div class="d-flex flex-row justify-content-between cardFooterFlex1">
						<div class="align-self-center" id="cardDet2">
							Ver Detalle
						</div>
						<div class="align-self-center" id="cardImg2">
							<div class="divImages">
								<a><img id="icoImg2" src="{{ asset('img/right-arrow2.svg') }}"></a>
							</div>
						</div>
					</div>
				</div>					
			</div>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 pb-4">
			<div class="card" id="card3">

				<div class="card-body text-white mt-3 pt-0 mb-2 pb-0 ml-2 pl-0 mr-2 pr-0">
					<div class="d-flex flex-row bd-highlight justify-content-between mt-0 pt-0 cardBodyFlex1">
						<div class="d-flex bd-highlight cardBodyFlex2">
							<div class="align-self-center">
								<a><img id="icoImg" src="{{ asset('img/24hours2.svg') }}"></a>
							</div>
						</div>
						<div class="bd-highlight mt-0 pt-0 cardBodyFlex3">
							<div class="d-flex align-items-end flex-column bd-highlight mt-0 pt-0 cardBodyFlex4">
								<div class="display-4 bd-highlight pt-0 mt-0 cardBodyFlex5">
                                    <?php /*echo getCountLocRemesasTodos(3,''); */?></div>
								<div class="mt-auto bd-highlight cardBodyFlex6" id="tit1">Remesas Fuera de Rango</div>
							</div>
						</div>
					</div>

				</div>
				<div class="card-footer bg-light mt-0 pt-0 mb-0 pb-0" id="etiqueta" onclick="location.href='{{ route('viewRemesas') }}';">
					<div class="d-flex flex-row justify-content-between cardFooterFlex1">
						<div class="align-self-center" id="cardDet3">
							Ver Detalle
						</div>
						<div class="align-self-center" id="cardImg3">
							<div class="divImages">
								<a><img id="icoImg2" src="{{ asset('img/right-arrow3.svg') }}"></a>
							</div>
						</div>
					</div>
				</div>					
			</div>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 pb-4">
			<div class="card" id="card4">
				<div class="card-body text-white mt-3 pt-0 mb-2 pb-0 ml-2 pl-0 mr-2 pr-0">
					<div class="d-flex flex-row bd-highlight justify-content-between mt-0 pt-0 cardBodyFlex1">
						<div class="d-flex bd-highlight cardBodyFlex2">
							<div class="align-self-center">
								<a><img src= "" id="icoImg"></a>
							</div>
						</div>
						<div class="bd-highlight mt-0 pt-0 cardBodyFlex3">
							<div class="d-flex align-items-end flex-column bd-highlight mt-0 pt-0 cardBodyFlex4">
								<div class="display-4 bd-highlight pt-0 mt-0 cardBodyFlex5">0</div>
								<div class="mt-auto bd-highlight cardBodyFlex6" id="tit1">Cierre Día Pendiente</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer bg-light mt-0 pt-0 mb-0 pb-0" id="etiqueta" onclick="alert();return false;">
					<div class="d-flex flex-row justify-content-between cardFooterFlex1">
						<div class="align-self-center" id="cardDet4">
							Ver Detalle
						</div>
						<div class="align-self-center" id="cardImg4">
							<div class="divImages">
								<a><img id="icoImg2" src="{{ asset('img/right-arrow4.svg') }}"></a>
							</div>
						</div>
					</div>
				</div>					
			</div>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 pb-4">
			<div class="card" id="card5">
				<div class="card-body text-white mt-3 pt-0 mb-2 pb-0 ml-2 pl-0 mr-2 pr-0">
					<div class="d-flex flex-row bd-highlight justify-content-between mt-0 pt-0 cardBodyFlex1">
						<div class="d-flex bd-highlight cardBodyFlex2">
							<div class="align-self-center">
								<a><img src= "" id="icoImg"></a>
							</div>
						</div>
						<div class="bd-highlight mt-0 pt-0 cardBodyFlex3">
							<div class="d-flex align-items-end flex-column bd-highlight mt-0 pt-0 cardBodyFlex4">
								<div class="display-4 bd-highlight pt-0 mt-0 cardBodyFlex5">0</div>
								<div class="mt-auto bd-highlight cardBodyFlex6" id="tit1">Acumulación Deficit Excesivo</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer bg-light mt-0 pt-0 mb-0 pb-0" id="etiqueta" onclick="alert();return false;">
					<div class="d-flex flex-row justify-content-between cardFooterFlex1">
						<div class="align-self-center" id="cardDet5">
							Ver Detalle
						</div>
						<div class="align-self-center" id="cardImg5">
							<div class="divImages">
								<a><img id="icoImg2" src="{{ asset('img/right-arrow4.svg') }}"></a>
							</div>
						</div>
					</div>
				</div>					
			</div>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 pb-4">
			<div class="card" id="card6">
				<div class="card-body text-white mt-3 pt-0 mb-2 pb-0 ml-2 pl-0 mr-2 pr-0">
					<div class="d-flex flex-row bd-highlight justify-content-between mt-0 pt-0 cardBodyFlex1">
						<div class="d-flex bd-highlight cardBodyFlex2">
							<div class="align-self-center">
								<a><img src= "" id="icoImg"></a>
							</div>
						</div>
						<div class="bd-highlight mt-0 pt-0 cardBodyFlex3">
							<div class="d-flex align-items-end flex-column bd-highlight mt-0 pt-0 cardBodyFlex4">
								<div class="display-4 bd-highlight pt-0 mt-0 cardBodyFlex5">0</div>
								<div class="mt-auto bd-highlight cardBodyFlex6" id="tit1">Cuadratura Anulación Pendiente</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer bg-light mt-0 pt-0 mb-0 pb-0" id="etiqueta" onclick="alert();return false;">
					<div class="d-flex flex-row justify-content-between cardFooterFlex1">
						<div class="align-self-center" id="cardDet6">
							Ver Detalle
						</div>
						<div class="align-self-center" id="cardImg6">
							<div class="divImages">
								<a><img id="icoImg2" src="{{ asset('img/right-arrow3.svg') }}"></a>
							</div>
						</div>
					</div>
				</div>					
			</div>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 pb-4">
			<div class="card" id="card7">
				<div class="card-body text-white mt-3 pt-0 mb-2 pb-0 ml-2 pl-0 mr-2 pr-0">
					<div class="d-flex flex-row bd-highlight justify-content-between mt-0 pt-0 cardBodyFlex1">
						<div class="d-flex bd-highlight cardBodyFlex2">
							<div class="align-self-center">
								<a><img src= "" id="icoImg"></a>
							</div>
						</div>
						<div class="bd-highlight mt-0 pt-0 cardBodyFlex3">
							<div class="d-flex align-items-end flex-column bd-highlight mt-0 pt-0 cardBodyFlex4">
								<div class="display-4 bd-highlight pt-0 mt-0 cardBodyFlex5">0</div>
								<div class="mt-auto bd-highlight cardBodyFlex6" id="tit1">Asl's Pendientes</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer bg-light mt-0 pt-0 mb-0 pb-0" id="etiqueta" onclick="alert();return false;">
					<div class="d-flex flex-row justify-content-between cardFooterFlex1">
						<div class="align-self-center" id="cardDet7">
							Ver Detalle
						</div>
						<div class="align-self-center" id="cardImg7">
							<div class="divImages">
								<a><img id="icoImg2" src="{{ asset('img/right-arrow2.svg') }}"></a>
							</div>
						</div>
					</div>
				</div>					
			</div>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 pb-4">
			<div class="card" id="card8">
				<div class="card-body text-white mt-3 pt-0 mb-2 pb-0 ml-2 pl-0 mr-2 pr-0">
					<div class="d-flex flex-row bd-highlight justify-content-between mt-0 pt-0 cardBodyFlex1">
						<div class="d-flex bd-highlight cardBodyFlex2">
							<div class="align-self-center">
								<a><img src= "" id="icoImg"></a>
							</div>
						</div>
						<div class="bd-highlight mt-0 pt-0 cardBodyFlex3">
							<div class="d-flex align-items-end flex-column bd-highlight mt-0 pt-0 cardBodyFlex4">
								<div class="display-4 bd-highlight pt-0 mt-0 cardBodyFlex5">0</div>
								<div class="mt-auto bd-highlight cardBodyFlex6" id="tit1">Cierre Día Pendiente</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer bg-light mt-0 pt-0 mb-0 pb-0" id="etiqueta" onclick="aler();return false;">
					<div class="d-flex flex-row justify-content-between cardFooterFlex1">
						<div class="align-self-center" id="cardDet8">
							Ver Detalle
						</div>
						<div class="align-self-center" id="cardImg8">
							<div class="divImages">
								<a><img id="icoImg2" src="{{ asset('img/right-arrow.svg') }}"></a>
							</div>
						</div>
					</div>
				</div>					
			</div>
		</div>

		<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 pb-4">
			<div class="card" id="card9">
				<div class="card-body text-white mt-3 pt-0 mb-2 pb-0 ml-2 pl-0 mr-2 pr-0">
					<div class="d-flex flex-row bd-highlight justify-content-between mt-0 pt-0 cardBodyFlex1">
						<div class="d-flex bd-highlight cardBodyFlex2">
							<div class="align-self-center">
								<a><img src= "" id="icoImg"></a>
							</div>
						</div>
						<div class="bd-highlight mt-0 pt-0 cardBodyFlex3">
							<div class="d-flex align-items-end flex-column bd-highlight mt-0 pt-0 cardBodyFlex4">
								<div class="display-4 bd-highlight pt-0 mt-0 cardBodyFlex5">0</div>
								<div class="mt-auto bd-highlight cardBodyFlex6" id="tit1">Acumulación Deficit Excesivo</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer bg-light mt-0 pt-0 mb-0 pb-0" id="etiqueta" onclick="aler();return false;">
					<div class="d-flex flex-row justify-content-between cardFooterFlex1">
						<div class="align-self-center" id="cardDet9">
							Ver Detalle
						</div>
						<div class="align-self-center" id="cardImg9">
							<div class="divImages">
								<a><img id="icoImg2" src="{{ asset('img/right-arrow3.svg') }}"></a>
							</div>
						</div>
					</div>
				</div>					
			</div>
		</div>			

	</div>				
</section>
@stop