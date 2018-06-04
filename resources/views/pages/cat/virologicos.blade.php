@extends('app')

@section('content')
	<div class="inner-banner virologicos"></div>
	<h1 class="inner-title text-center">Virológicos</h1>

	<div class="container">
		<div class="row cat-products-container">
			<div class="col-xs-12 col-md-4">
				<div class="product-item tres">
					<div class="photo"><img src="images/vaccine-fc-antrax-thumbnail.png" alt="product vaccine fc antrax thumbnail"></div>
					<div class="info">
						<h3 class="bold">VACCINE</h3>
						<p class="substance gris">FC Antrax</p>
						<p class="use biologico">Biológico</p>
						<div class="animals">
							<span class="icon-bobino"></span>
							<span class="icon-caprino"></span>
							<span class="icon-ovino"></span>
							<span class="icon-porcino"></span>
							<span class="icon-canino"></span>
							<span class="icon-equino"></span>
						</div>
						<a class="link_read_more rojo italic" href="{{ url('vaccine-triple-aviar') }}" class="rojo">Ver detalle</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop