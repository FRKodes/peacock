<nav class="navbar navbar-expand-md fixed-top">
	<div class="container">
		<div class="row cien">			
			<div class="top-shit">
				<a class="navbar-brand" href="{{ url('/') }}"><img class="logo" src="images/logo-peacock.svg" alt="logo peacock"></a></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="{{ url('quienes-somos') }}">Quiénes somos</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
						<ul class="dropdown-menu" aria-labelledby="dropdown01">
							
							<li class="dropdown-submenu mayus">
							    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clase</a>
							    <ul class="dropdown-menu">
									  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Biológico</a>
									    <ul class="dropdown-menu">
									      <li><a class="dropdown-item" href="{{ url('bacteriologico') }}">Bacteriológico</a></li>
									      <li><a class="dropdown-item" href="{{ url('virologico') }}">virológico</a></li>
									    </ul>
									  </li>
									  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Farmacéutico</a>
									    <ul class="dropdown-menu">
											<li><a class="dropdown-item" href="{{ url('desparacitantes') }}">Desparacitantes</a></li>
											<li><a class="dropdown-item" href="{{ url('anti-microbianos') }}">Anti microbianos</a></li>
											<li><a class="dropdown-item" href="{{ url('vitaminicos') }}">Vitamínicos</a></li>
									    </ul>
									  </li>
								</ul>
							</li>

							<li class="dropdown-submenu">
							    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Especie</a>
							    <ul class="dropdown-menu">
									<li><a class="dropdown-item" href="{{ url('bovinos') }}">Bovino</a></li>
									<li><a class="dropdown-item" href="{{ url('caninos') }}">Canino</a></li>
									<li><a class="dropdown-item" href="{{ url('caprinos') }}">Caprino</a></li>
									<li><a class="dropdown-item" href="{{ url('equinos') }}">Equinos</a></li>
									<li><a class="dropdown-item" href="{{ url('felinos') }}">Felino</a></li>
									<li><a class="dropdown-item" href="{{ url('ovinos') }}">Ovino</a></li>
									<li><a class="dropdown-item" href="{{ url('porcinos') }}">Porcino</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="{{ url('ser-distribuidor') }}">Se distribuidor</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ url('contacto') }}">Contacto</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ url('red-de-distribucion') }}">Red de distribución</a></li>
				</ul>
			</div>
		</div>	
	</div>
</nav>