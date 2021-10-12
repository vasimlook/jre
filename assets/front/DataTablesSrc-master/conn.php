<?php
if($_SERVER['HTTP_HOST']=='localhost'){
    define('USERNAME','root');
    define('PASSWORD','');
    define('DATABASE','jre');
}
else{
    define('USERNAME','knebxnii_jre');
    define('PASSWORD','vasim@123');
    define('DATABASE','knebxnii_jre');
}
// SQL server connection information
$sql_details = array(
    'user' => USERNAME,
    'pass' => PASSWORD,
    'db' => DATABASE,
    'host' => 'localhost'
);

