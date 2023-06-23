<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
*/
$route['default_controller'] = 'auth/login';

$route['dashboard'] = 'auth/dashboard';
$route['login'] = 'auth/login';


//get all departiments
$route['departiment'] = 'departiment/index';
//deleting departiments
$route['departiment/(:any)'] = 'departiment/delete_departiment/$1';

$route['404_override'] = 'auth/page_not_found';
$route['translate_uri_dashes'] = FALSE;

