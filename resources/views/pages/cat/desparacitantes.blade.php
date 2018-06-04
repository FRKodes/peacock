@extends('app')

@section('content')
	<div class="inner-banner desparacitantes"></div>
	<h1 class="inner-title text-center">Desparacitantes</h1>

	<div class="container">
		<div class="row cat-products-container">
			<div class="col-xs-12 col-md-4">
				<div class="product-item dectomaster-1">
					<div class="photo"><img src="images/dectomaster-1%-thumbnail.png" alt="product dectomaster 1% thumbnail"></div>
					<div class="info">
						<h3 class="bold">DECTOMASTER</h3>
						<p class="substance gris">1% Prolong</p>
						<p class="use farmaceutico">FARMACÉUTICOS</p>
						<div class="animals">
							<span class="icon-bobino"></span>
							<span class="icon-caprino"></span>
							<span class="icon-ovino"></span>
							<span class="icon-porcino"></span>
						</div>
						<a class="link_read_more rojo italic" href="{{ url('dectomaster-1-prolong') }}" class="rojo">Ver detalle</a>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-md-4">
				<div class="product-item tres">
					<div class="photo"><img src="images/dectomaster-3-5%-thumbnail.png" alt="product dectomaster 3.15% thumbnail"></div>
					<div class="info">
						<h3 class="bold">DECTOMASTER</h3>
						<p class="substance gris">3.15%</p>
						<p class="use farmaceutico">FARMACÉUTICOS</p>
						<div class="animals">
							<span class="icon-bobino"></span>
						</div>
						<a class="link_read_more rojo italic" href="{{ url('dectomaster-3_15') }}" class="rojo">Ver detalle</a>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-md-4">
				<div class="product-item tres">
					<div class="photo"><img src="images/dectomaster-ad3e-thumbnail.png" alt="product dectomaster ad3e thumbnail"></div>
					<div class="info">
						<h3 class="bold">DECTOMASTER</h3>
						<p class="substance gris">AD3E L.A.</p>
						<p class="use farmaceutico">FARMACÉUTICOS</p>
						<div class="animals">
							<span class="icon-bobino"></span>
							<span class="icon-caprino"></span>
							<span class="icon-ovino"></span>
							<span class="icon-porcino"></span>
						</div>
						<a class="link_read_more rojo italic" href="{{ url('dectomaster-ad3e-la') }}" class="rojo">Ver detalle</a>
					</div>
				</div>
			</div>

		</div>
	</div>
@stop