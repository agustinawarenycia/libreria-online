<!--Menu para administradores ---->

<?php if (($this->session->userdata('logged_in')) and ($perfil_id == '1')) { ?>

	<div id="header2">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">

					<ul class="navbar-nav ml-md-auto" id="bg2">
						<li class="nav-item dropdown">

							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Sesion | <?= $usuario ?> <span class="caret"></span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo base_url('cerrar_sesion'); ?>">Cerrar Sesion</a>
							</div>
						</li>
					</ul>


				</nav>
			</div>

		</div>
	</div>


	<!-- Imagen del header-->
	<div id="header2">
		<div class="col-md-12" style="width:100%">

			<img src="<?php echo base_url('assets/img/top_visual.png'); ?>" class="d-block w-100" data-interval="3000" style="width:100">
		</div>
	</div>

	<!-- Menu general para el administrador -->

	<div id="header2">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a class="navbar-brand" href="<?php echo base_url('Welcome'); ?>">

					<img src="<?php echo base_url('assets/img/logo/logo.png'); ?>" alt="logo mate" height="42" width="42">
				</a>
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">


					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Productos
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo base_url('ver_ilustracion'); ?>">ilustracion</a>
							<a class="dropdown-item" href="<?php echo base_url('ver_historieta'); ?>">Historieta</a>
							<a class="dropdown-item" href="<?php echo base_url('ver_cuento'); ?>">Cuento</a>
							<a class="dropdown-item" href="<?php echo base_url('ver_poesiaYteatro'); ?>">Poesia y Teatro</a>
							<a class="dropdown-item" href="<?php echo base_url('ver_aventura'); ?>">Aventura</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?php echo base_url('ver_productos'); ?>">Todos los productos</a>
						</div>
					</li>


					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Usuarios
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo base_url('ver_admin'); ?>">Administradores</a>
							<a class="dropdown-item" href="<?php echo base_url('ver_clientes'); ?>">Clientes</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?php echo base_url('ver_usuarios'); ?>">Todos los usuarios</a>

						</div>
					</li>

					<!-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Mi cuenta
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo base_url('mantenimiento'); ?>">Actualizar Datos</a>
							<a class="dropdown-item" href="<?php echo base_url('mantenimiento'); ?>">Cambiar Contraseña</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?php echo base_url('mantenimiento'); ?>">Dar de baja</a>
						</div>
					</li> -->


					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('ver_consultas'); ?>">Consultas</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('ver_ventas'); ?>">Ventas</a>
					</li>
				</ul>


				</ul>

			</div>
		</nav>
	</div>

	<!-- Menu clientes -->

<?php } else if (($this->session->userdata('logged_in')) and ($perfil_id == '2')) { ?>



	<div id="header2">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">

					<ul class="navbar-nav ml-md-auto" id="bg2">
						<li class="nav-item dropdown">
							<!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Compras
							</a> -->

							<!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo base_url('carrito'); ?>">Ver carrito</a>
								<div class="dropdown-divider"></div>
							</div> -->

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Compras
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo base_url('carrito'); ?>">Ver carrito</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url("listar_compras/$id_usuario"); ?>">Compras realizadas</a>
							</div>
						</li>
						</li>





						<li class="nav-item dropdown">

							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Sesion | <?= $usuario ?> <span class="caret"></span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo base_url('cerrar_sesion'); ?>">Cerrar Sesion</a>
							</div>
						</li>
					</ul>


				</nav>
			</div>

		</div>
	</div>



	<!-- Imagen del header-->
	<div id="header2">
		<div class="col-md-12" style="width:100%">

			<img src="<?php echo base_url('assets/img/top_visual.png'); ?>" class="d-block w-100" data-interval="3000" style="width:100">
		</div>
	</div>


	<!-- Menu general para el usuario -->

	<div id="header2">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a class="navbar-brand" href="<?php echo base_url('Welcome'); ?>">

					<img src="<?php echo base_url('assets/img/logo/logo.png'); ?>" alt="logo mate" height="42" width="42">
				</a>
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<!-- <li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('catalogo-productos'); ?>">Catalogo</a>
					</li> -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Catalogo
						</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo base_url('catalogo_ilustracion'); ?>">ilustracion</a>
							<a class="dropdown-item" href="<?php echo base_url('catalogo_historieta'); ?>">Historieta</a>
							<a class="dropdown-item" href="<?php echo base_url('catalogo_cuento'); ?>">Cuento</a>
							<a class="dropdown-item" href="<?php echo base_url('catalogo_poesiaYteatro'); ?>">Poesia y Teatro</a>
							<a class="dropdown-item" href="<?php echo base_url('catalogo_aventura'); ?>">Aventura</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?php echo base_url('catalogo-productos'); ?>">Todos los productos</a>
						</div>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('comercial'); ?>">Informacion Comercial</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('consultas'); ?>">Consultas</a>
					</li>

				</ul>

				<!-- <li class="nav-item">
					<a class="nav-link" href="<?php echo base_url("listar_compras/$id_usuario"); ?>">Compras</a>
				</li> -->




			</div>

		</nav>
	</div>


	<!--Menu general-->
<?php } else { ?>

	<div id="header2"  style=" background-color: transparent !important">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">



					<ul class="navbar-nav ml-md-auto" id="bg2">
						<li class="nav-item dropdown">

							<ul class="nav navbar-nav navbar-right">
							<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('registro'); ?>">Registrarse</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('sesion'); ?>">Iniciar Sesion</a>
					</li>

								
							</ul>
						</li>
					</ul>

			</div>
			</nav>
		</div>
	</div>


	<!-- Imagen del header-->
	<div id="header2" >
		<div class="col-md-12" style="width:100%">

			<img src="<?php echo base_url('assets/img/top_visual.png'); ?>" class="d-block w-100" data-interval="3000" style="width:100">
		</div>
	</div>
	<!-- Menu genral para el invitado -->

	<div id="header2">

		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a class="navbar-brand" href="<?php echo base_url('Welcome'); ?>">
					<img src="assets/img/logo/logo.png" alt="logo mate" height="42" width="42">
				</a>
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">

					<!-- <ul class="navbar-nav mr-auto"> -->

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Catalogo
						</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo base_url('catalogo_ilustracion'); ?>">ilustracion</a>
							<a class="dropdown-item" href="<?php echo base_url('catalogo_historieta'); ?>">Historieta</a>
							<a class="dropdown-item" href="<?php echo base_url('catalogo_cuento'); ?>">Cuento</a>
							<a class="dropdown-item" href="<?php echo base_url('catalogo_poesiaYteatro'); ?>">Poesia y Teatro</a>
							<a class="dropdown-item" href="<?php echo base_url('catalogo_aventura'); ?>">Aventura</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?php echo base_url('catalogo-productos'); ?>">Todos los productos</a>
						</div>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('comercial'); ?>">Informacion Comercial</a>
					</li>

					<!-- <li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('consultas'); ?>">Consultas</a>
					</li> -->
					
					<!-- </ul> -->
				</ul>

			</div>

		</nav>
	</div>

<?php } ?>