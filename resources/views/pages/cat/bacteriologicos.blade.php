@extends('app')

@section('content')
	<div class="inner-banner bacteriologicos"></div>
	<h1 class="inner-title text-center">Bacteriológicos</h1>

	<div class="container">
		<div class="row cat-products-container">
			<div class="col-xs-12 col-md-4">
				<div class="product-item bacterin-2">
					<div class="photo"><img src="images/bacterin-2-doble-bovina-thumbnail.png" alt="product bacterin 2 doble bovina thumbnail"></div>
					<div class="info">
						<h3 class="bold">BACTERIN 2</h3>
						<p class="substance gris">Doble bovina</p>
						<p class="use biologico">BIOLÓGICOS</p>
						<div class="animals">
							<span class="icon-bobino"></span>
							<span class="icon-caprino"></span>
							<span class="icon-ovino"></span>
						</div>
						<a class="link_read_more rojo italic" href="{{ url('bacterin-2-doble-bovina') }}" class="rojo">Ver detalle</a>
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-4">
				
				<div class="product-item bacterin-3">
					<div class="photo"><img src="images/bacterin-3-triple-bovina-thumbnail.png" alt="product bacterin 3 triple bovina thumbnail"></div>
					<div class="info">
						<h3 class="bold">BACTERIN 3</h3>
						<p class="substance gris">Triple bovina</p>
						<p class="use biologico">BIOLÓGICOS</p>
						<div class="animals">
							<span class="icon-bobino"></span>
							<span class="icon-caprino"></span>
							<span class="icon-ovino"></span>
						</div>
						<a class="link_read_more rojo italic" href="{{ url('bacterin-3-triple-bovina') }}" class="rojo">Ver detalle</a>
					</div>
				</div>
			</div>
			
			<div class="col-xs-12 col-md-4">
				<div class="product-item bacterin-7">
					<div class="photo"><img src="images/bacterin-7-vias-thumbnail.png" alt="product bacterin 7 vias"></div>
					<div class="info">
						<h3 class="bold">BACTERIN 7 VIAS</h3>
						<p class="substance gris">Clostri</p>
						<p class="use biologico">BIOLÓGICOS</p>
						<div class="animals">
							<span class="icon-bobino"></span>
							<span class="icon-caprino"></span>
							<span class="icon-porcino"></span>
						</div>
						<a class="link_read_more rojo italic" href="{{ url('bacterin-7-vias-clostri') }}" class="rojo">Ver detalle</a>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-md-4">
				<div class="product-item bacterin-past">
					<div class="photo"><img src="images/bacterin-pasteurelosis-thumbnail.png" alt="product bacterin pasteurelosis thumbnail"></div>
					<div class="info">
						<h3 class="bold">BACTERIN</h3>
						<p class="substance gris">Pasteurelosis p+h</p>
						<p class="use biologico">BIOLÓGICOS</p>
						<div class="animals">
							<span class="icon bobino"></span>
							<span class="icon-caprino"></span>
							<span class="icon-ovino"></span>
						</div>
						<a class="link_read_more rojo italic" href="{{ url('bacterin-pasteurelosis-p+h') }}" class="rojo">Ver detalle</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop