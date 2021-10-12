<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$r = $_SERVER['SCRIPT_NAME'];
$subdomain = explode('/', $r);
array_pop($subdomain);
$urllink=$protocol.$_SERVER['HTTP_HOST'];
if($urllink=="https://localhost" || $urllink=="http://localhost"){
    if(isset($subdomain[1])){
        $urllink.='/'.$subdomain[1];
    }    
}
define('BASE_URL',$urllink);
define('BASE_URL_DATATABLES',BASE_URL.'/');
define('BASE_URL_API', 'http://' . $_SERVER['HTTP_HOST'] . implode('/', $subdomain) . '/');
define('APPNAME', 'PROPERTY VIEWING APPLICATION');
define('UPLOAD_FOLDER', BASE_URL.'/uploads/');
define('IMG_DIR','uploads/');
define('FILE_DIR', "/uploads/doc/");
define('FRONT_ASSETS_FOLDER', BASE_URL.'/assets/front/');
define('ADMIN_ASSETS_FOLDER', BASE_URL.'/assets/admin/');
define('EMPLOYEE_ASSETS_FOLDER', BASE_URL.'/assets/employee/');
?>