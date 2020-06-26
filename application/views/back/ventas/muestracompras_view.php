<?php if (($this->session->userdata('logged_in')) and ($perfil_id == '2')) { ?>

	<?php if (!$ventas_detalle) { ?>
		<div class="container page-content">
			<div class="well">
				<h1 class="text-center"><b> Todavia no se han realizado Compras.</b></h1>
			</div>

		</div>

	<?php } else { ?>
		<div class="container page-content">
			<div class="well">
				<h1>Todas las Compras</h1>
			</div>
			<br><br>
			<div class="table-responsive-sm">
				<table class="table table-striped ">
					<thead>
						<tr>
							<th>ID Operacion</th>
							<th>Fecha</th>
							<th>Descripcion</th>
							<th>Categoria</th>
							<th>Cantidad</th>
							<th>Precio Venta por unidad</th>
							<th>Total de Venta</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($ventas_detalle->result() as $row) {
							//$imagen = $row->imagen;
						?>
<div class="well">
				<h1 class="text-center"><b>pavada</b></h1>
			</div
							<tr>
								<td><?php echo $row->id_ventas;  ?></td>
								<td><?php echo $row->fecha;  ?></td>
								<td><?php echo $row->descripcion;  ?></td>
								<td><?php echo $row->categoria_id;  ?></td>
								<td><?php echo $row->cantidad;  ?></td>
								<td><?php echo $row->precio_venta;  ?></td>
								<td><?php echo $row->total_venta;  ?></td>

							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

	<?php } ?>
<?php } ?>