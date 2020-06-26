
    <div class="container" id="carrito">
        <div class="cart">
            <div class="heading">
                <h2 id="h2" align="center">Productos en tu Carrito</h2>
            </div>

            <div class="text" align="center">

                <?php $cart_check = $this->cart->contents();
                // Si el carrito está vacio, mostrar el siguiente mensaje
                if (empty($cart_check)) {
                    
                    echo 'Para agregar productos al carrito, click en "Comprar"';
                    echo "<img src='assets/img/espera.png' border='0' width='300' height='200'>"; 
                }
                ?>
            </div>

            <table class="table table-striped">

                <?php // Todos los items de carrito en "$cart". 
                if ($cart = $this->cart->contents()) : //Esta función devuelve un array de los elementos agregados en el carro

                ?>
                    <tr id="main_heading">
                        <td>ID</td>
                        <td>Descripcion</td>
                        <td>Precio</td>
                        <td>Cantidad</td>
                        <td>Total</td>
                        <td>Cancelar Producto</td>
                    </tr>

                    <?php // Crea un formulario y manda los valores a carrito_controller/actualiza carrito
                    echo form_open('carrito_actualiza');
                    $gran_total = 0;
                    $i = 1;
                    $todos = 0;

                    foreach ($cart as $item) :
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                    ?>
                        <tr>
                            <td>
                                <?php echo $i++; ?>
                            </td>
                            <td>
                                <?php echo $item['name']; ?>
                            </td>
                            <td>
                                $ <?php echo number_format($item['price'], 2); ?>
                            </td>
                            <td>
                                <?php echo form_input(
                                    'cart[' . $item['id'] . '][qty]',
                                    $item['qty'],
                                    'maxlength="3" size="1" style="text-align: right"'
                                ); ?>
                            </td>
                            <?php $gran_total = $gran_total + $item['subtotal']; ?>
                            <td>
                                $ <?php echo number_format($item['subtotal'], 2) ?>
                            </td>
                            <td>
                                <?php // Imagen
                                $path = '<img src= ' . base_url('assets/img/cancelar.png') . ' width="25px" height="20px">';
                                echo anchor('carrito_elimina/' . $item['rowid'], $path);
                                ?>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>

                    <tr>
                        <td>
                            <b>Total: $
                                <?php //Gran Total
                                echo number_format($gran_total, 2);
                                ?>
                            </b>
                        </td>

                        <td colspan="5" align="right">
                            <!-- Vaciar carrito-->
                            <?php echo anchor('carrito_elimina/all', 'Vaciar', "class='btn btn-danger' "); ?>
                            <!-- Actualizar carrito-->
                            <?php echo form_submit('submit', 'Actualizar', "class='btn btn-secondary ml-2' "); ?>
                            <!-- " Confirmar orden envia a carrito_controller/muestra_compra  -->
                            <?php echo anchor('comprar', 'Finalizar Compra', "class='btn btn-light ml-2' "); ?>
                        </td>
                    </tr>
                <?php echo form_close();
                endif; ?>
            </table>
        </div>
    </div>


