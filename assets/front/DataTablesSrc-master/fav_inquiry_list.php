<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
// DB table to use

$table = 'rental_property_viewing rpv';
// Table's primary key
$primaryKey = 'rpv.rental_view_id';
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(      
    array('db' => 'rpv.rental_view_id', 'dt' =>'rental_view_id'),
    array('db' => 'rpv.property_address_id', 'dt' =>'property_address_id'),
    array('db' => 'rpv.when_you_move_in', 'dt' =>'when_you_move_in'),
    array('db' => 'rpv.viewer_name', 'dt' =>'viewer_name'),
    array('db' => 'rpv.viewer_contact', 'dt' =>'viewer_contact'),
    array('db' => 'rpv.viewer_email', 'dt' =>'viewer_email'),
    array('db' => 'rpv.main_applicant_birthday', 'dt' =>'main_applicant_birthday'),
    array('db' => 'rpv.current_residential', 'dt' =>'current_residential'),
    array('db' => 'rpv.current_rent_pay', 'dt' =>'current_rent_pay'),
    array('db' => 'rpv.move_reason', 'dt' =>'move_reason'),
    array('db' => 'rpv.how_many_people_stay', 'dt' =>'how_many_people_stay'),
    array('db' => 'rpv.main_applicant_weekly_income', 'dt' =>'main_applicant_weekly_income'),
    array('db' => 'rpv.joint_applicant_weekly_income', 'dt' =>'joint_applicant_weekly_income'),
    array('db' => 'rpv.how_many_adults', 'dt' =>'how_many_adults'),
    array('db' => 'rpv.how_many_children', 'dt' =>'how_many_children'),
    array('db' => 'rpv.how_many_working', 'dt' =>'how_many_working'),
    array('db' => 'rpv.how_many_cars', 'dt' =>'how_many_cars'),
    array('db' => 'rpv.is_affect_weekly_rental_payment', 'dt' =>'is_affect_weekly_rental_payment'),
    array('db' => 'rpv.other_affect_weekly_rental_payment', 'dt' =>'other_affect_weekly_rental_payment'),
    array('db' => 'rpv.viewer_feedback', 'dt' =>'viewer_feedback'),
    array('db' => 'rpv.applicatation_created_date', 'dt' =>'applicatation_created_date'),
    array('db' => 'rpv.application_updated_date', 'dt' =>'application_updated_date'),
    array('db' => 'rpv.admin_note', 'dt' =>'admin_note'),
    array('db' => 'rpv.fav_status', 'dt' =>'fav_status'),
    
    array('db' => 'pm.property_name', 'dt' =>'property_name'),
    array('db' => 'pm.property_address', 'dt' =>'property_address')
);
include 'conn.php';

$status=$_REQUEST['status'];
$where=" rpv.fav_status=$status ";

//if(!empty($_REQUEST['search']['value'])){
//    echo $_REQUEST['status']['value'];die;
////    $value=$_REQUEST['search']['value'];
////    $where.=" (hc.category_title LIKE '%$value%' OR hc1.category_title LIKE '%$value%' OR huf.upload_file_title LIKE '%$value%' OR huf.upload_file_desc LIKE '%$value%' OR huf.upload_file_original_name LIKE '%$value%' OR huf.upload_file_status LIKE '%$value%') ";
//}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
require('ssp.class.php');
echo json_encode(
      SSP::fav_inquiry_list($_REQUEST, $sql_details, $table, $primaryKey, $columns,$where,$status)
);

