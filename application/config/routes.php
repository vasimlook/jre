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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Home';
$route['404_override'] = 'frontc/Home_c/page404';
$route['errorpage'] = 'frontc/Home_c/page404';
$route['translate_uri_dashes'] = FALSE;
/*
| -------------------------------------------------------------------------
| Added by CI Bootstrap 3
| Additional routes on top of codeigniter-restserver
| -------------------------------------------------------------------------
| Examples from rule: "api/(:any)/(:num)"
|	- [GET]		/api/users/1 ==> Users Controller's id_get($id)
|	- [POST]	/api/users/1 ==> Users Controller's id_post($id)
|	- [PUT]		/api/users/1 ==> Users Controller's id_put($id)
|	- [DELETE]	/api/users/1 ==> Users Controller's id_delete($id)
| 
| Examples from rule: "api/(:any)/(:num)/(:any)"
|	- [GET]		/api/users/1/subitem ==> Users Controller's subitem_get($parent_id)
|	- [POST]	/api/users/1/subitem ==> Users Controller's subitem_post($parent_id)
|	- [PUT]		/api/users/1/subitem ==> Users Controller's subitem_put($parent_id)
|	- [DELETE]	/api/users/1/subitem ==> Users Controller's subitem_delete($parent_id)
*/


//************************************Front side route****************************//

//jre front route start
$route['home']='jrefront/PropertyView';
$route['add-application'] = 'jrefront/PropertyView/add_application';
$route['confirmation'] = 'jrefront/PropertyView/thank_you';
//jre front route end




//************************************Employee side route****************************//
$route['employee-login']='employeec/Login_c';
$route['employee-logout']='employeec/Login_c/logout';
$route['employee-update-profile']='employeec/Employee_c/update_profile';
$route['employee-dashboard']='employeec/Employee_c/dashboard';

$route['employee-inquiry-list']='employeec/Employee_c/students_list';
$route['deleted-inquiry-list']='employeec/Employee_c/deleted_inquiry_list';
$route['fav-inquiry-list']='employeec/Employee_c/fav_inquiry_list';
$route['employee-property-list']='employeec/Employee_c/property_list';

$route['approve-status']='employeec/Employee_c/approve_status';
$route['update-note']='employeec/Employee_c/update_note';
$route['set-modal']='employeec/Employee_c/set_modal';
//$route['set-modal-inquiry']='employeec/Employee_c/set_modal_inquiry';
$route['employee-edit-note/(:num)']='employeec/Employee_c/edit_note/$1';
$route['employee-view-inquiry/(:num)']='employeec/Employee_c/view_inquiry/$1';
$route['employee-add-property']='employeec/Employee_c/add_property';
$route['employee-edit-property/(:num)']='employeec/Employee_c/edit_property/$1';
