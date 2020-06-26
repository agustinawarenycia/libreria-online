<body>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>

	<?php if (!$ventas_detalle) { ?>
	<div class="container">
		<div class="well">
			<img class="rounded mx-auto d-block responsive" src="<?php echo base_url('assets/img/construccion.png');?>" width="250">
			<h1 class="text-center"><b> Todavia no se han realizado ventas.</b></h1>	
		</div>
		<!--
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			<a type="button" class="btn btn-success" href="<?php echo base_url('agrega_producto'); ?>">Agregar</a>
			<a type="button" class="btn btn-danger" href="<?php echo base_url('productos_eliminados'); ?>">ELIMINADOS</a>
		<?php } ?>	
		-->
	</div>

<?php } else { ?>

	<div class="container">
		<div class="well">
			<h1>Todas las ventas</h1>
		</div>
		<!--	
		<a type="button" class="btn btn-success" href="<?php echo base_url('agrega_producto'); ?>">Agregar</a>
		<a type="button" class="btn btn-danger" href="<?php echo base_url('productos_eliminados'); ?>">ELIMINADOS</a>
		-->
		<br><br>
		<table class="table table-hover table-dark">
			<thead>
				<tr> producto_id	cantidad	precio	total 	
					<th>ID Operacion</th>
					<th>ID Venta </th>
					<th>ID Producto</th>
					<th>Cantidad</th>
					<th>Precio</th>
					<th>Total</th>
					<!--<th>ID</th>
					<th>Descripcion</th>
					<th>ID Categoria</th>
					<th>Precio Costo</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Imagen</th>
					<th>Eliminado</th>
					<th>Modificar</th>-->
				</tr>
			</thead>
			<tbody>
				<?php foreach($ventas_detalle->result() as $row)
				{ 
					//$imagen = $row->imagen;
					?>

					<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->venta_id;  ?></td>
					<td><?php echo $row->producto_id;  ?></td>
					<td><?php echo $row->cantidad;  ?></td>
					<td><?php echo $row->precio;  ?></td>
					<td><?php echo $row->total;  ?></td>

					<!--<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->descripcion;  ?></td>
					<td><?php echo $row->categoria_id;  ?></td>
					<td>$<?php echo $row->precio_costo;  ?></td>
					<td>$<?php echo $row->precio_venta;  ?></td>
					<td><?php echo $row->stock;  ?></td>
				     <td><img height="50px" src="<?php echo $imagen; ?>"/></td>
					<td><?php echo $row->eliminado;  ?></td>
					<td><a href="<?php echo base_url("modifica_producto/$row->id");?>">Modificar</a>|<a href="<?php echo base_url("baja_producto/$row->id");?>">Eliminar</a></td>-->
				</tr>
				<?php } ?>
			</tbody>
		</table>	            
	</div>

	<?php } ?>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
</body>
