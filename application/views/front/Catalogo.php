<?php if (!$productos) { ?>
	

	<div class="container"
	
		<br>
		<br>
		<br>
		<br>
		<div class="well">
			
			<h1>No hay productos en el catalogo.</h1>
		</div>	

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>


	</div>

<?php } else { ?>

	

<div class="container-fluid">
	
	<h2 class="text-center">Catalogo de Productos</h2>

	<hr>

	<div class="row text-center">
		<?php foreach($productos->result() as $row){ ?>
			<div class="col-md-3 col-sm-6 hero-feature">
				<div class="thumbnail">

					<img src="<?php echo base_url($row->imagen); ?>" alt="" class="img-responsive img-thumbnail">

					<div class="caption">
						<h4><?php echo trim($row->descripcion); ?></h4>

						<p>
							<p class="card-text text-center">Stock Actual: <?php echo $row->stock ?></p>
							<?php 
							 if($row->stock == 0){
	      						echo '<span class="badge badge-danger">Sin Stock</span>';
	    							} elseif ($row->stock_min >= $row->stock) {
	      								echo '<span class="badge badge-warning">Últimas unidades</span>';
	    										} else {
	   												   echo '<span class="badge badge-success">Hay Stock</span>';
	    						}
							?>
						</p>

						<p>Precio: $ <?php echo $row->precio_venta; ?> </p>

						<p>
						<?php 
							if (($row->stock > 0) && ($session_data = $this->session->userdata('logged_in'))) {

								// Envia los datos en forma de formulario para agregar al carrito
		                        echo form_open('carrito_agrega');
		                        echo form_hidden('id', $row->id);
		                        echo form_hidden('descripcion', $row->descripcion);
		                        echo form_hidden('precio_venta', $row->precio_venta);
		                        echo form_hidden('stock', $row->stock);
		            	?>
		                    	<div>
		                <?php
		                		// echo anchor('#', 'Especificaciones',"class='btn btn-secondary' ");

		                        $btn = array(
		                            'class' => 'btn btn-dark ml-2',
		                            'value' => 'Agregar al carrito',
		                            'name' => 'action'
		                        	);
		                        
		                        echo form_submit($btn);
		                        echo form_close();
		               	?>
		                    	</div>
		               	<?php 
								

							}else{
								
								// echo anchor('', 'Comprar',"class='btn btn-secondary' ");
								echo "<input type='button' value='Comprar' onClick='MiFuncionJS();' /><br>";

							}
						?>	
						</p>



						
					</div>
				</div>
			</div>
		<?php } ?>	
	</div>
	<hr>

	
</div>
<?php } ?>

<script language="javascript" type="text/javascript">

function MiFuncionJS()
{ 
	//  document.getElementById("vent").style.display= "block";

	 alert ("Para realizar una compra debe estar logeado");

// 	<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
//   <div class="modal-dialog modal-sm" role="document">
//     <div class="modal-content">
//       ...
//     </div>
//   </div>
// </div>

}
</script>

<div class="modal_compra" id="vent">
		
			¡Para poder realizar una compra debe estar logueado!

		

	</div>