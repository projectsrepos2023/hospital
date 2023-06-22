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

$route['404_override'] = 'auth/page_not_found';
$route['translate_uri_dashes'] = FALSE;
$route['departments'] = 'Admin/departments';
