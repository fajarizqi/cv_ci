<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin'] = 'login';
$route['admin/pendidikan'] = 'pendidikan/index';
$route['admin/pengalaman'] = 'pengalaman/index';
$route['admin/keahlian'] = 'keahlian/index';
$route['admin/skill'] = 'skill/index';