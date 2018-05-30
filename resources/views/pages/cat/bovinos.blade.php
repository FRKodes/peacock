@extends('app')

@section('content')
	<div class="inner-banner bobinos"></div>
	<h1 class="inner-title icon-bobino text-center">Bovinos</h1>

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

				<div class="col-xs-12 col-md-4">
					<div class="product-item tres">
						<div class="photo"><img src="images/dectomaster-ad3e-thumbnail.png" alt="product dectomaster ad3e thumbnail"></div>
						<div class="info">
							<h3 class="bold">STREPTO GUARD</h3>
							<p class="substance gris">+Diclofenaco</p>
							<p class="use antimicrobiano">ANTI MICROBIANO</p>
							<div class="animals">
								<span class="icon-bobino"></span>
								<span class="icon-caprino"></span>
								<span class="icon-ovino"></span>
								<span class="icon-porcino"></span>
								<span class="icon-canino"></span>
								<span class="icon-equino"></span>
							</div>
							<a class="link_read_more rojo italic" href="{{ url('strepto-guard') }}" class="rojo">Ver detalle</a>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-4">
					<div class="product-item tres">
						<div class="photo"><img src="images/dectomaster-ad3e-thumbnail.png" alt="product dectomaster ad3e thumbnail"></div>
						<div class="info">
							<h3 class="bold">STREPTO GUARD</h3>
							<p class="substance gris">+Dexametasona</p>
							<p class="use antimicrobiano">ANTI MICROBIANO</p>
							<div class="animals">
								<span class="icon-bobino"></span>
								<span class="icon-caprino"></span>
								<span class="icon-ovino"></span>
								<span class="icon-porcino"></span>
								<span class="icon-canino"></span>
								<span class="icon-equino"></span>
							</div>
							<a class="link_read_more rojo italic" href="{{ url('') }}" class="rojo">Ver detalle</a>
						</div>
					</div>
				</div>


		</div>
	</div>
@stop