@extends('app')

@section('content')
	<div class="inner-banner distribuidor"></div>
	
	<h1 class="inner-title text-center gris bold">Conviértete en distribuidor</h1>

	<div class="back-brown-01">
		<div class="container">
			<div class="row">
				
				<div class="col-xs-12 gris p-top-30">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit facere officiis, pariatur fuga recusandae, quidem adipisci corporis nemo ea animi tempora quia soluta placeat, magnam qui illo iste accusamus esse.</p>
				</div>
				
				<div class="col-xs-12 col-md-6 form">
					<p class="form-title">Datos de contacto.</p>
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
				</div>

				<div class="col-xs-12 col-md-6 form">
					<p class="form-title">Datos del negocio.</p>
						<div class="form-group">
							{{ Form::text('nombre_negocio', null, ['class'=>'form-control', 'placeholder'=>'Nombre del negocio']) }}
						</div>
						<div class="form-group">
							{{ Form::text('antiguedad', null, ['class'=>'form-control', 'placeholder'=>'Antigüedad del negocio']) }}
						</div>
						<div class="form-group">
							{{ Form::text('ciudad', null, ['class'=>'form-control', 'placeholder'=>'Ciudad']) }}
						</div>
						<div class="form-group">
							{{ Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Dirección']) }}
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