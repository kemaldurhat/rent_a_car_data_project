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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'home';

/* Pages -------------------------- Routes */

$route['arac'] 			= 'home/arac';
$route['ekle'] 			= 'home/ekle';
$route['kira_durum']	= 'home/kira_durum';
$route['kira_fiyat']	= 'home/kira_fiyat';
$route['bildirim']		= 'home/bildirim';
$route['bildirim_detay']= 'home/bildirim_detay';
$route['muhasebe']		= 'home/muhasebe';
$route['musteriler']	= 'home/musteriler';
$route['musteri_detay']	= 'home/musteri_detay';
$route['firma']	= 'home/firma';



/* Kullanıcı Giriş ve Çıkışları */
$route['giris'] 		= 'home/giris';
$route['login_control']	= 'home/login_control';
$route['cikis']	= 'home/cikis';









$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
