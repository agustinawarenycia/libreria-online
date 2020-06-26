
	<section class="container">
	<h1 class="text-center mt-4 text-uppercase font-weight-bold font-italic">Registro de Usuarios</h1>
	<br><br>
		<h3 class="font-weight-bold">Registrarse</h3>

		<p class="mb-4 ml-3 mr-2">
			Complete su información personal acontinuación:
		</p>

	<div class="container">
		<?php echo validation_errors(); ?>
		<!-- Genero el formulario para crear una usuario -->
		<?php echo form_open('verifico_nuevoregistro', ['class' => 'form-group', 
								'role' => 'form', 'id' => 'form_registro']); ?>
		<div class="row">
	    	<div class="col-md-3">		
				<label for="nombre">Nombre</label>
					<?php echo form_input(['name' => 'nombre', 
											'id' => 'nombre', 
											'class' => 'form-control',
											'placeholder' => 'Nombre...', 
											'required'=>'required', 
											'autofocus'=>'autofocus',
											'value'=>set_value('nombre')]); ?>
			</div>
			<div class="col-md-3">
				<label for="apellido">Apellido</label>
					<?php echo form_input(['name' => 'apellido', 
											'id' => 'apellido', 
											'class' => 'form-control',
											'placeholder' => 'Apellido...', 
											'required'=>'required',
											'value'=>set_value('apellido')]); ?>
			</div>
			<div class="col-md-3">		
				<label for="email">Correo Electronico</label>
								<?php echo form_input(['type'=>'email', 
														'name' => 'email', 
														'id' => 'email', 
														'class' => 'form-control',
														'placeholder' => 'Correo electronico...', 
														'required'=>'required',
														'value'=>set_value('email')]); ?>
			</div>
			<div class="col-md-3"></div>
			<br>
			<div class="col-md-3 mt-4">		
				<label for="usuario">Nombre de usuario</label>
								<?php echo form_input(['name' => 'usuario', 
														'id' => 'usuario', 
														'class' => 'form-control',
														'placeholder' => 'Usuario...', 
														'required'=>'required',
														'value'=>set_value('usuario')]); ?>
			</div>
			<div class="col-md-3 mt-4">		
				<label for="pass">Contraseña</label>
								<?php echo form_password(['name' => 'pass', 
														'id' => 'pass', 
														'class' => 'form-control',
														'placeholder' => 'Contraseña...', 
														'required'=>'required']); ?>
			</div>
			<div class="col-md-3 mt-4">		
				<label for="re_password">Reingrese su contraseña</label>
								<?php echo form_password(['name' => 're_password', 
														'id' => 're_password', 
														'class' => 'form-control',
														'placeholder' => 'Repetir Contraseña...', 
														'required'=>'required']); ?>
			</div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<?php echo form_submit('submit', 'Registrar',"class='btn btn-dark' "); ?>
		<?php echo form_reset ('reset', 'Limpiar', "class='btn btn-danger ml-1'"); ?>
			
		<?php echo form_close(); ?>
	</div>
	</section>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
