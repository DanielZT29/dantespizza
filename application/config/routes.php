<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Loguear';
//ADMIN
$route['ainventario'] = 'admin/C_inventario/inventario';
$route['amenu'] = 'admin/amenu';
$route['ahamburguesas'] = 'admin/ahamburguesas';
$route['aburritos'] = 'admin/aburritos';
$route['asincronizadas'] = 'admin/asincronizadas';
$route['aotros'] = 'admin/aotros';
$route['crearpizza'] = 'admin/crearpizza';
$route['asucursales'] = 'admin/asucursales';
$route['crearsucursal'] = 'admin/crearsucursal';

//LOGIN
$route['iniciosesion'] = 'Loguear';
$route['registros'] = 'Registraruser';

//CLIENTE
$route['vistamenu'] = 'Menu';
$route['hamburguesas'] = 'Hamburguesas';
$route['burritos'] = 'Burritos';
$route['sincronizadas'] = 'Sincronizadas';
$route['otros'] = 'Otros';
$route['clientes'] = 'cliente';
$route['sucursales'] = 'sucursales';
$route['carrito'] = 'Carrito';
$route['orden/(:num)'] = 'orden/index/$1';
$route['orden/update/(:num)'] = 'orden/update/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
