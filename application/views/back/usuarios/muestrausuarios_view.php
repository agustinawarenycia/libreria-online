
	<br><br>


	<?php if (!$usuarios) { ?>
		<div class="container">
			<div class="well">
				<img class="rounded mx-auto d-block responsive" src="<?php echo base_url('assets/img/construccion.png'); ?>" width="250">
				<h1 class="text-center"><b> Todavia no se han cargado usuarios.</b></h1>
			</div>
			<?php if (($this->session->userdata('logged_in')) and ($perfil_id == '1')) { ?>
				<!--<a type="button" class="btn btn-success" href="<?php echo base_url('agrega_usuarios'); ?>">Agregar</a>-->
				<a type="button" class="btn btn-danger" href="<?php echo base_url('usuarios_eliminados'); ?>">Ver Elminados</a>
			<?php } ?>
		</div>

	<?php } else { ?>

		<div class="container-fluid">

			<br><br>
			<br><br>
			<br><br>
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="well">
							<h1>Todos los usuarios</h1>
						</div>

						<a type="button" class="btn btn-danger" href="<?php echo base_url('usuarios_eliminados'); ?>">Ver Eliminados</a>
						<br><br>

						<div class="table-responsive-sm">
							<table table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>email</th>
										<th>Usuario</th>
										<th>Categoria</th>
										<th>Eliminado</th>
										<th>Deshabiilitar</th>

									</tr>
								</thead>
								<tbody>
									<?php foreach ($usuarios->result() as $row) { ?>
										<tr>
											<td><?php echo $row->id_usuario;  ?></td>
											<td><?php echo $row->nombre;  ?></td>
											<td><?php echo $row->apellido;  ?></td>
											<td><?php echo $row->email;  ?></td>
											<td><?php echo $row->usuario;  ?></td>
											<td><?php echo $row->perfil_id;  ?></td>
											<td><?php echo $row->baja;  ?></td>




											<td>
												<a href="<?php echo base_url("modifica_usuario/$row->id_usuario"); ?>">Modificar</a>|

												<a href="<?php echo base_url("baja_usuario/$row->id_usuario"); ?>">Dar de baja</a></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php } ?>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
