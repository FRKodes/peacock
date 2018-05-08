<nav class="navbar navbar-expand-md fixed-top">
	<div class="container">
		<div class="row cien">
			
			<div class="top-shit">
				<a class="navbar-brand" href="{{ url('/') }}">
					<img class="logo" src="images/logo-peacock.svg" alt="logo peacock"></a>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="#">Quiénes somos</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="{{ url('bovinos') }}">Bovinos</a>
							<a class="dropdown-item" href="{{ url('equinos') }}">Equinos</a>
							<a class="dropdown-item" href="{{ url('porcinos') }}">Porcinos</a>
						</div>
					</li>

					<li class="nav-item"><a class="nav-link" href="#">Se distribuidor</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Contacto</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Red de distribución</a></li>
				</ul>
			</div>
		</div>	
	</div>

</nav>