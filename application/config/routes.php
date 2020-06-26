<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//vistas-secciones
$route['default_controller'] = 'welcome';
$route['mantenimiento'] = 'Welcome/construccion';
$route['quienes-somos'] = 'Welcome/quienesSomos';
$route['contacto'] = 'Welcome/infoContacto';
$route['comercial'] = 'Welcome/infoComercial';
$route['terminos'] = 'Welcome/terminosUsos';
$route['consultas'] = 'Welcome/consulta';
$route['catalogo-productos']='back/carrito_controller/catalogo';

//registro
$route['registro'] = 'Welcome/registrarse';
$route['verifico_nuevoregistro']='back/registro_controller';

//sesion
$route['sesion']='Welcome/login';
$route['verifico_usuario']='back/login_controller';

//panel
$route['panel'] = 'back/panel_controller';
$route['no_sesion'] = 'welcome/invitado';

//cerrar
$route['salir']='welcome/logout';
$route['cerrar_sesion']='back/panel_controller/logout';

//productos
 //muestra
$route['ver_productos']='back/producto_controller';
$route['ver_ilustracion']='back/producto_controller/muestra_ilustracion';
$route['ver_historieta']='back/producto_controller/muestra_historieta';

$route['ver_cuento']='back/producto_controller/muestra_cuento';


$route['ver_poesiaYteatro']='back/producto_controller/muestra_poesiaYteatro';
$route['ver_aventura']='back/producto_controller/muestra_aventura';


$route['productos_eliminados']='back/producto_controller/muestra_eliminados';

//alta
$route['agrega_producto']='back/producto_controller/form_agrega_producto';
$route['verifico_nuevoproducto']='back/producto_controller/agrega_producto';

//modificaciones
$route['modifica_producto/(:num)']='back/producto_controller/muestra_modificar/$1';
$route['verifico_modificaproducto/(:num)']='back/producto_controller/modificar_producto/$1';

//baja_logica
$route['baja_producto/(:num)']='back/producto_controller/eliminar_producto/$1';
$route['activa_producto/(:num)']='back/producto_controller/activar_producto/$1';

// Usuarios
 //muestra
$route['ver_usuarios']='back/usuario_controller';
$route['ver_admin']='back/usuario_controller/muestra_admin';
$route['ver_clientes']='back/usuario_controller/muestra_clientes';
$route['usuarios_eliminados']='back/usuario_controller/muestra_eliminados';

//modificaciones
$route['modifica_usuario/(:num)']='back/usuario_controller/modificar_usuario/$1';
$route['verificar_modificar_usuario/(:num)']='back/usuario_controller/verificar_modificar_usuario/$1';


//baja_logica
$route['baja_usuario/(:num)']='back/usuario_controller/eliminar_usuario/$1';
$route['activa_usuario/(:num)']='back/usuario_controller/activar_usuario/$1';

 //carrito
 $route['carrito']='back/carrito_controller';
 $route['carrito_agrega']='back/carrito_controller/add';
 $route['carrito_actualiza']='back/carrito_controller/actualiza_carrito';
 $route['carrito_elimina/(:any)']='back/carrito_controller/remove/$1';
 $route['comprar']='back/carrito_controller/muestra_compra';
 $route['confirma_compra']='back/carrito_controller/guarda_compra';



//---------------------------------------------------------------------------------



/*consultas*/
$route['ver_consultas']='back/consultas_controller';
$route['ver_archivados']='back/consultas_controller/muestra_eliminados';

/*alta*/
$route['verifico_consultas']='back/consultas_controller/alta_consultas';

/*baja_logica*/
$route['archiva_consulta/(:num)']='back/consultas_controller/archivar_consulta/$1';
$route['restaurar_consulta/(:num)']='back/consultas_controller/restaurar_consulta/$1';

//-------------------------------------------------------------------------------

/*ventas*/
$route['ventas']='back/producto_controller/listar_ventas';
$route['detalles_venta/(:num)']='back/producto_controller/muestra_detalles/$1';

$route['ver_ventas'] = 'back/producto_controller/listar_ventas';

$route['listar_compras/(:any)']='back/producto_controller/muestra_compra/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE; 


/**Catalogo por categoria */

$route['catalogo_cuento']='back/carrito_controller/catalogo_cuento';
$route['catalogo_ilustracion']='back/carrito_controller/catalogo_ilustracion';
$route['catalogo_historieta']='back/carrito_controller/catalogo_historieta';
$route['catalogo_poesiaYteatro']='back/carrito_controller/catalogo_poesiaYteatro';
$route['catalogo_aventura']='back/carrito_controller/catalogo_aventura';