<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "homeController";
$route[rawurlencode('претрага').'/(:any)'] = "homeController/search/$1";
$route[rawurlencode('категорија') . '/(:any)/(:num)'] = "homeController";
$route['verifyLogin'] = "verifyLoginController";
$route[rawurlencode('пријава')] = "loginController";
$route['logout'] = "loginController/logout";
$route[rawurlencode('корисници')] = "usersController";
$route[rawurlencode('регистрација')] = "registerController";
$route[rawurlencode('категорије')] = "categoryController";
$route[rawurlencode('профил')] = "userProfileController";
$route[rawurlencode('чланци')] = "articleEditController";
$route[rawurlencode('пријава-на-алумни')] = "addToAlumniController";
$route[rawurlencode('алумни')] = "alumniController";
$route[rawurlencode('наставници')] = "teachersController";
$route[rawurlencode('преглед-профила')] = "viewProfileController";
$route[rawurlencode('профил-корисника').'/(:num)'] = "userProfileController/index/$1";
$route[rawurlencode('контакт')] = "contactController";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */