<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

//define('STDIN',fopen("php://stdin","r")); 


//**************************************EMPLOYEE ROUTE****************************//
define('EMPLOYEE_LOGIN_LINK', BASE_URL.'/employee-login');
define('EMPLOYEE_LOGOUT_LINK', BASE_URL.'/employee-logout');
define('EMPLOYEE_PROFILE_LINK', BASE_URL.'/employee-profile');
define('EMPLOYEE_DASHBOARD_LINK', BASE_URL.'/employee-dashboard');
define('EMPLOYEE_UPDATE_PROFILE_LINK', BASE_URL.'/employee-update-profile');

define('EMPLOYEE_INQUIRY_LIST_LINK', BASE_URL.'/employee-inquiry-list');
define('EMPLOYEE_INQUIRY_DELETED_LIST_LINK', BASE_URL.'/deleted-inquiry-list');
define('EMPLOYEE_INQUIRY_FAV_LIST_LINK', BASE_URL.'/fav-inquiry-list');
define('EMPLOYEE_PROPERTY_LIST_LINK', BASE_URL.'/employee-property-list');
define('APPROVE_STATUS',BASE_URL."/approve-status");
define('UPDATE_NOTE',BASE_URL."/update-note");
define('SET_MODAL',BASE_URL."/set-modal");
//define('SET_MODAL_INQUIRY',BASE_URL."/set-modal-inquiry");
define('EMPLOYEE_EDIT_NOTE_LINK', BASE_URL.'/employee-edit-note/');

define('EMPLOYEE_ADD_PROPERTY_LINK', BASE_URL.'/employee-add-property');
define('EMPLOYEE_EDIT_PROPERTY_LINK', BASE_URL.'/employee-edit-property/');


//**************************************FRONT ROUTE****************************//
define('FRONT_ABOUT_LINK', BASE_URL.'/front-about');
define('FRONT_CONTACT_LINK', BASE_URL.'/front-contact');
define('FRONT_INQUIRY_REGISTRATION_LINK', BASE_URL.'/front-inquiry');


//**************************************JRE ROUTE START****************************//

define('FRONT_SUBMIT_PROPERTY_VIEWVWING_APPLICATION', BASE_URL.'/add-application');
define('FRONT_NEW_PROPERTY_VIEWVWING_APPLICATION', BASE_URL.'/home');
define('FRONT_CONFIRMATION_APPLICATION', BASE_URL.'/confirmation');


//**************************************JRE ROUTE END****************************//


//**************************************COMMON ROUTE****************************//
define('PAGE_404_LINK', BASE_URL.'/errorpage');

//**************************************FRONT TITLE****************************//
define('FRONT_HOME_TITLE', 'FRONT-HOME');
define('FRONT_ABOUT_TITLE', 'FRONT-ABOUT');
define('FRONT_INQUIRY_TITLE', 'INQUIRY');
define('FRONT_PROPERTY_VIEW_TITLE', 'PROPERTYVIEW');
define('FRONT_THANK_YOU_TITLE', 'THANKYOU');
define('FRONT_404_TITLE', '404');


//**************************************Employee TITLE****************************//
define('EMPLOYEE_LOGIN_TITLE', 'EMPLOYEE-LOGIN');
define('EMPLOYEE_PROFILE_TITLE', 'EMPLOYEE-PROFILE');
define('EMPLOYEE_UPDATE_PROFILE_TITLE', 'EMPLOYEE-UPDATE-PROFILE');
define('EMPLOYEE_DASHBOARD_TITLE', 'EMPLOYEE-DASHBOARD');

define('EMPLOYEE_INQUIRY_LIST_TITLE', 'INQUIRY-LIST');
define('EMPLOYEE_INQUIRY_DELETED_LIST_TITLE', 'DELETED-INQUIRY-LIST');
define('EMPLOYEE_INQUIRY_FAV_LIST_TITLE', 'FAV-INQUIRY-LIST');
define('EMPLOYEE_PROPERTY_LIST_TITLE', 'PROPERTY-LIST');
define('EMPLOYEE_INQUIRY_VIEW_TITLE', 'VIEW-INQUIRY');
define('EMPLOYEE_ADD_PROPERTY_TITLE', 'ADD-PROPERTY');
define('EMPLOYEE_EDIT_PROPERTY_TITLE', 'EDIT-PROPERTY');
define('EMPLOYEE_EDIT_NOTE_TITLE', 'EDIT-NOTE');