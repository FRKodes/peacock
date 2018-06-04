@extends('app')

@section('content')
	<div class="inner-banner anti-microbianos"></div>
	<h1 class="inner-title text-center">Antimicrobianos</h1>

	<div class="container">
		<div class="row cat-products-container">
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