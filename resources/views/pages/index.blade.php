@extends('app')

@section('content')
	
	@include('partials.main-banners')

	<div class="container">
		<div class="row">
			<div class="who-we-are col-xs-12 col-md-10 ml-md-auto mr-md-auto">
				<div class="image">
					<img class="logo" src="images/toro-empresa-home.jpg" alt="toro peacock animal health"></a>
				</div>
				<div class="text gris">
					<h1 class="ubuntu mayus">Peacock</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore laudantium esse ad repellendus, facilis quae nostrum atque suscipit amet voluptates commodi neque doloremque ipsam inventore voluptatem nam ex, nisi mollitia.</p>
					<a href="#" class="italic" title="Leer más sobre la historia de Peacock Animal Health">Leer más...</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid sunshine-banner"></div>
	
	@include('partials.featured-products')

	<div class="container-fluid back-brown">
		<img class="logo-gradients" src="images/peacock-logo-color.png" alt="peacock logo color">
	</div>

	<div class="container-fluid back-brown-01">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-3 ml-md-auto dist-image">
						<img class="logo-gradients" src="images/oveja-distribuidor-home.jpg" alt="peacock logo color">
					</div>
					<div class="col-xs-12 col-md-7 mr-md-auto dist-text">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium repellat alias cumque explicabo, rem mollitia ut doloribus eveniet officiis facilis, enim ea at autem quam. Nesciunt cum, deserunt corrupti eius.
						</p>
						<a href="#" class="btn btn-primary red-btn ubuntu italic">Conviértete en distribuidor</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<div class="containder-fluid back-cow"></div>
	
	<div class="container-fluid back-brown-01">
		<div class="row">		
			<div class="container">
				<div class="row">
					<div class="col-xs-12 productos-peacock">
						<img src="images/productos-peacock-animal-health-home.png" alt="productos peacock animal health home">
					</div>
				</div>

				<div class="row align-items-center">
					<div class="col-xs-12 col-md-1 ml-md-auto text-center">
						<img src="images/ubicacion.svg" alt="ubicación de distribuidores de productos peacock animal health home">
					</div>
					<div class="col-xs-12 col-md-3 mr-md-auto text-center">
						<a href="#" class="btn btn-primary red-btn ubuntu italic">Encuentra productos Peacock</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop