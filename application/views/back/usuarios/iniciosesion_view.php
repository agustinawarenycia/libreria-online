
	<section class="container">
	<h1 class="text-center text-uppercase font-weight-bold font-italic">Cuenta Personal</h1>
	<br><br>
		<h3 class="font-weight-bold">Iniciar Sesion</h3>

		<p class="mb-4 ml-3 mr-2">
			Ingrese su información de inicio de sesión acontinuación:
		</p>

	<div class="container">
		<?php echo validation_errors(); ?>
		<!-- Genera un formulario para loguearse -->
		<?php echo form_open('verifico_usuario', ['class' => 'form-signin', 'role' => 'form']); ?>
	
		<div class="row">
	    	<div class="col-md-3">		
				<label for="usuario">Usuario</label>
				<?php echo form_input(['name' => 'usuario', 
										'id' => 'usuario', 
										'class' => 'form-control',
										'placeholder' => 'Usuario...', 
										'required'=>'required', 
										'autofocus'=>'autofocus']); ?>
			</div>
			<div class="col-md-3">
				<label for="pass">Contraseña</label>		
					<?php echo form_input(['type' => 'password',
											'name' => 'pass', 
											'id' => 'pass', 
											'class' => 'form-control',
											'placeholder' => 'Contraseña...', 
											'required'=>'required']); ?>
			</div>
			<div class="col-md-4">
				<!--<img src="<?php echo base_url('assets/img/logo/logo.png');?>" class="responsive" style="width:100">-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<br>
			<?php echo form_submit('submit', 'Iniciar sesión',"class='btn btn-dark'"); ?>
			<?php echo form_close(); ?>
	</div>
	</section>

	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
