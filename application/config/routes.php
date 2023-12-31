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
$route['staff'] = 'staff/all_staff';
$route['create'] = 'staff/index';
$route['staff-profile/(:any)'] = 'staff/staff_profile/$1';

//patients
$route['patient'] = 'patient/all_patients';
$route['register-patient'] = 'patient/index';
$route['patient_profile'] = 'patient/patient_profile';
$route['prescription'] = 'Gynacological/gynacological';
 
// transfer
$route['patient_transfer/(:any)'] = 'Transfer/transfer_patient/$1';

$route['404_override'] = 'auth/page_not_found';
$route['translate_uri_dashes'] = FALSE;



