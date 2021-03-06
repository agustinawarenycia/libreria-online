<body>

	<?php if (($this->session->userdata('logged_in')) and ($perfil_id == '1')) { ?>
		<?php if (!$consultas) { ?>

			<section>
				<div class="container-fluid">
					<br><br>
					<br><br>
					<br><br>
					<br><br>
					<br><br>

					<div class="container">
						<div class="well">
							<img class="rounded mx-auto d-block responsive" src="<?php echo base_url('assets/img/sleep.png'); ?>" width="250">
							<h1 class="text-center">
								<b> Todavia no se han recibido consultas.</b>
							</h1>
						</div>
						<a type="button" class="btn btn-danger" href="<?php echo base_url('ver_archivados'); ?>">Ver Arhivados</a>
					</div>
					<br><br>
					<br><br>
					<br><br>
					<br><br>
					<br><br>
				</div>
			</section>
		<?php } else { ?>

			<div class="container-fluid">

				<br><br>
				<br><br>
				<br><br>
				<br><br>
				<br><br>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="well">
								<h1>Todas las consultas</h1>
							</div>
							<div class="table-responsive-sm">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Telefono</th>
										<th>email</th>
										<th>Asunto</th>
										<th>Mensaje</th>
										<th>Archivar</th>

									</tr>
								</thead>
								<tbody>
									<?php foreach ($consultas->result() as $row) { ?>
										<tr>
											<td><?php echo $row->id_mensaje;  ?></td>
											<td><?php echo $row->nombre;  ?></td>
											<td><?php echo $row->apellido;  ?></td>
											<td><?php echo $row->telefono;  ?></td>
											<td><?php echo $row->email;  ?></td>
											<td><?php echo $row->asunto;  ?></td>
											<td><?php echo $row->mensaje;  ?></td>
											<td>
												<a href="<?php echo base_url("archiva_consulta/$row->id_mensaje"); ?>">Archivar</a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
							</div>
							<a type="button" class="btn btn-outline-danger" href="<?php echo base_url('ver_archivados'); ?>">Ver Archivados</a>
						</div>
					</div>
				</div>

				<br><br>
				<br><br>
				<br><br>
				<br><br>
				<br><br>

			<?php } ?>
			</div>
		<?php } ?>



</body>