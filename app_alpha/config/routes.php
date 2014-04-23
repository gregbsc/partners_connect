<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "screener";

//$route['admin/(:any)'] = "admin/admin/$1";

//admin routes
$route['admin'] = "admin/admin";
$route['admin/login'] = "admin/admin/login";
$route['admin/users'] = "admin/admin/users";
$route['admin/create'] = "admin/admin/create";
$route['admin/remove'] = "admin/admin/remove";
$route['admin/deactivated'] = "admin/admin/deactivated";
$route['admin/user/details'] = "admin/user/details";
$route['admin/user/contact'] = "admin/user/contact";
$route['admin/scheduled'] = "admin/scheduled";

$route['admin/submissions'] = "admin/submissions";

$route['screen'] = "screener";

$route['resources'] = 'resources';

$route['baseline'] = 'baseline';

$route['404_override'] = '';

//  USER STUFF
$route['user'] = "user/user";
$route['user/baseline'] = "user/user/baseline";
$route['user/consent'] ="user/user/consent";
$route['user/login'] = "user/user/login";
$route['user/update'] = "user/user/update";
$route['user/lost'] = "lost";


/* End of file routes.php */
/* Location: ./application/config/routes.php */