
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>


<?php if (!$productos) { ?>

	<div class="container">
		<div class="well">
			<img class="rounded mx-auto d-block responsive" src="<?php echo base_url('assets/img/construccion.png');?>" width="250">
			<h1 class="text-center"><b> Todavia no se han eliminado productos.</b></h1>	
		</div>	
	</div>

<?php } else { ?>

	<div class="container">
		<div class="well">
			<h1>Todos los Eliminados</h1>
		</div>	

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descripcion</th>
					<th>Categoria</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos->result() as $row){ ?>
				<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->descripcion;  ?></td>
					<td><?php echo $row->categoria_id;  ?></td>
					<td><?php echo $row->precio_venta;  ?></td>
					<td><?php echo $row->stock;  ?></td>
					<td><a href="<?php echo base_url("modifica_producto/$row->id");?>">Modificar</a>|<a href="<?php echo base_url("activa_producto/$row->id");?>">Activar</a></td>
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
