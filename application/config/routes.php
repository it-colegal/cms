<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| URI ROUTING
|--------------------------------------------------------------------------
|
| Routing dasar aplikasi CMS Company Profile.
|
*/

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'home/index';

$route['admin'] = 'admin/authentication';
$route['admin/login'] = 'admin/authentication';
$route['admin/dashboard'] = 'admin/dashboard';

$route['admin'] = 'admin/dashboard';
$route['admin/dashboard'] = 'admin/dashboard';

$route['page/(:any)'] = 'page/detail/$1';

$route['service'] = 'service/index';
$route['service/(:any)'] = 'service/detail/$1';

$route['product'] = 'product/index';
$route['product/(:any)'] = 'product/detail/$1';

$route['news'] = 'news/index';
$route['news/(:any)'] = 'news/detail/$1';