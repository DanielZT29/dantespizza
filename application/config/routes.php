<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Menu';
//LOGIN
$route['iniciosesion'] = 'Loguear';
$route['registro'] = 'Registraruser';

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
$route['404_override'] = 'Menu';
$route['translate_uri_dashes'] = FALSE;
