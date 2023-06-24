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


//billing settings
$route['labtest'] = 'labtest/index';
$route['labtest/(:any)'] = 'labtest/delete_labtest/$1';

//procedure
$route['procedure'] = 'procedure/index';
$route['procedure/(:any)'] = 'procedure/delete_procedure/$1';

//surgical
$route['surgical'] = 'surgical/index';
$route['surgical/(:any)'] = "surgical/delete_surgicals/$1";

//staff
$route['departments'] = 'Admin/departments';
$route['staff'] = 'Admin/staff';
$route['staff_profile'] = 'Admin/staff_profile';
$route['add_staff'] = 'Admin/Add_staff';
$route['add_patient'] = 'Reception/add_patient';
$route['all_patient'] = 'Admin/all_patients';

$route['404_override'] = 'auth/page_not_found';
$route['translate_uri_dashes'] = FALSE;



