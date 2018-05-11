@extends('app')

@section('content')
	<div class="inner-banner contacto"></div>
	
	<h1 class="inner-title text-center gris bold">Contáctanos</h1>

	<div class="back-brown-01">
		<div class="container">
			<div class="row">
				
				<div class="col-xs-12 col-md-6 mapa">
					<div id="map"></div>
					<div class="info">
						<h2 class="contact-title bold">Oficina Guadalajara, MX.</h2>
						<p>Calle Lorem ipsum dolor sit amet #123</p>
						<p>Zapopan, Jalisco, MX.</p>
						<p>Tel: +51 (33) 3344 5566</p>
					</div>
				</div>
				
				<div class="col-xs-12 col-md-6 form">
					<p class="form-title">Escríbenos.</p>
					{{ Form::open()}}
						<div class="form-group">
							{{ Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Nombre *requerido']) }}
						</div>
						<div class="form-group">
							{{ Form::text('telefono', null, ['class'=>'form-control', 'placeholder'=>'Teléfono *requerido']) }}
						</div>
						<div class="form-group">
							{{ Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Correo Electrónico *requerido']) }}
						</div>
						<div class="form-group">
							{{ Form::textarea('mensaje', null, ['class'=>'form-control', 'placeholder'=>'placeholdertext']) }}
						</div>
						<div class="form-group submit-btn-container">
							{{ Form::submit('Enviar formulario', ['class'=>'btn btn-primary red-btn ubuntu italic']) }}
						</div>

					{{ Form::close()}}
				</div>
			</div>
		</div>
	</div>
@stop