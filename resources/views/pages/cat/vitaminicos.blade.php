@extends('app')

@section('content')
	<div class="inner-banner vitaminicos"></div>
	<h1 class="inner-title icon-bobino text-center">Vitamínicos</h1>

	<div class="container">
		<div class="row cat-products-container">
			<div class="col-xs-12 col-md-4">
				<div class="product-item tres">
					<div class="photo"><img src="images/" alt="product DERRIENLYTIC thumbnail"></div>
					<div class="info">
						<h3 class="bold">DERRIENLYTIC</h3>
						<p class="substance gris"></p>
						<p class="use farmaceutico">Farmacéutico</p>
						<div class="animals">
							<span class="icon-bobino"></span>
							<span class="icon-caprino"></span>
							<span class="icon-ovino"></span>
							<span class="icon-porcino"></span>
							<span class="icon-equino"></span>
						</div>
						<a class="link_read_more rojo italic" href="{{ url('derrienlytic') }}" class="rojo">Ver detalle</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop