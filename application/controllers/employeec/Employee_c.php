<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_c extends CI_Controller {

    public function __construct() {
        parent::__construct();
        sessionCheckEmployee();
        $this->load->helper('functions');
        include APPPATH . 'third_party/image-resize/imageresize.php';
        $this->load->model('employeem/Login_m');
        $this->load->model('employeem/Employee_m');
//        if (isset($_SESSION['user_id'])) {
//            $result = $this->Login_m->getTokenAndCheck($_SESSION['usertype'], $_SESSION['user_id']);
//            if ($result) {
//                $token = $result['token'];
//                if ($_SESSION['tokencheck'] != $token) {
//                    session_destroy();
//                    redirect(EMPLOYEE_LOGIN_LINK);
//                }
//            }
//        }
        $method = $this->router->fetch_method();
        visitLog($method, "Employee_c");
    }

    public function dashboard() {
        $data['title'] = EMPLOYEE_DASHBOARD_TITLE;
        $this->load->employee_view('employee/dashboard', $data);
    }

    public function update_profile() {
        $result = array();
        if (isset($_POST['user_current_password']) && $_POST['user_current_password'] != '') {
            if ($this->Login_m->check_current_password($_POST['user_current_password'])) {
                $res = $this->Login_m->update_password($_POST);
                if ($res) {
                    successOrErrorMessage("Password changed successfully", 'success');
                    $result['success'] = "success";
                }
            } else {
                successOrErrorMessage("Plz enter correct details", 'error');
                $result['success'] = "fail";
            }
            echo json_encode($result);
        }
        $data['title'] = EMPLOYEE_UPDATE_PROFILE_TITLE;
        $this->load->employee_view('employee/update_profile', $data);
    }

    
    public function view_inquiry($rental_view_id) {
        $data['title'] = EMPLOYEE_INQUIRY_VIEW_TITLE;
        $inquiry_data = $this->Employee_m->get_inquiry_by_id($rental_view_id);
        $data['inquiry_data'] = $inquiry_data;
        $this->load->employee_view('employee/view_inquiry', $data);
    }
    
    
    public function property_list() {
        $data['title'] = EMPLOYEE_PROPERTY_LIST_TITLE;
        $this->load->employee_view('employee/property_list', $data);
    }

    public function add_property() {
        if (isset($_POST['property_name'])) {
            if ($_POST['property_name'] && $_POST['property_name'] != '') {
                $res = $this->Employee_m->add_property($_POST);
                if ($res) {
                    //Success message : Complaint has been added
                    successOrErrorMessage("Data added successfully", 'success');
                    redirect(EMPLOYEE_PROPERTY_LIST_LINK);
                } else {
                    //Error message
                    successOrErrorMessage("something happened wrong", 'error');
                }
            }
        }
        $data['title'] = EMPLOYEE_ADD_PROPERTY_TITLE;
        $this->load->employee_view('employee/addproperty', $data);
    }

    public function edit_property($property_id) {
        if (isset($_POST['property_name'])) {
            if ($_POST['property_name'] && $_POST['property_name'] != '') {
                $res = $this->Employee_m->edit_property($property_id, $_POST);
                if ($res) {
                    //Success message : Complaint has been added
                    successOrErrorMessage("Data updated successfully", 'success');
                    redirect(EMPLOYEE_PROPERTY_LIST_LINK);
                } else {
                    //Error message
                    successOrErrorMessage("something happened wrong", 'error');
                }
            }
        }
        $data['res'] = $this->Employee_m->get_property_by_id($property_id);
        $data['title'] = EMPLOYEE_EDIT_PROPERTY_TITLE;
        $this->load->employee_view('employee/editproperty', $data);
    }

    public function students_list() {
        $data['title'] = EMPLOYEE_INQUIRY_LIST_TITLE;
        $this->load->employee_view('employee/inquiry_list', $data);
    }
    public function deleted_inquiry_list() {
        $data['title'] = EMPLOYEE_INQUIRY_DELETED_LIST_TITLE;
        $this->load->employee_view('employee/inquiry_list', $data);
    }
     public function fav_inquiry_list() {
        $data['title'] = EMPLOYEE_INQUIRY_FAV_LIST_TITLE;
        $this->load->employee_view('employee/fav_list', $data);
    }

    public function approve_status() {
        if (isset($_REQUEST['table_id'])) {
            $res = $this->Employee_m->approve_status($_REQUEST);
            if ($res) {
                $data = array(
                    'suceess' => true
                );
            }
            echo json_encode($data);
        }
    }
    
    public function update_note() {        
        if (isset($_REQUEST['table_id'])) {
            $res = $this->Employee_m->update_note($_REQUEST);
            if ($res) {
                $data = array(
                    'suceess' => true
                );
            }
            echo json_encode($data);
        }
    }
    
    public function set_modal() {                
        if (isset($_REQUEST['table_id'])) {
            $res = $this->Employee_m->get_note_by_id($_REQUEST['table_id']);
            if ($res) {
                $data = array(
                    'suceess' => true,
                    'result'=>$res
                );
            }
            echo json_encode($data);
        }
    }

//    public function set_modal_inquiry() {
//        $rental_view_id=$_POST['rental_view_id'];
//        $inquiry_data = $this->Employee_m->get_inquiry_by_id($rental_view_id);        
//        $str='<div class="card card-preview">
//            <div class="card-inner">
//                <table style="font-size: 17px" id="example" class="table table-striped table-bordered dt-responsive nowrap datatableEx" style="width:100%">
//                    <tr>
//                        <td style="width: 32%;">Address of the property you are viewing</td>
//                        <td style="width: 78%;">'.$inquiry_data['property_name'].'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">When can you move in?</td>
//                        <td style="width: 78%;">'.date("d/m/Y", strtotime($inquiry_data['when_you_move_in'])).'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">Your Name</td>
//                        <td style="width: 78%;">'.$inquiry_data['viewer_name'].'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">Contact No</td>
//                        <td style="width: 78%;">'.$inquiry_data['viewer_contact'].'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">Email address</td>
//                        <td style="width: 78%;">'.$inquiry_data['viewer_email'].'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">Main applicant Date Of Birth</td>
//                        <td style="width: 78%;">'.$inquiry_data['main_applicant_birthday'].'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">Your current residential address</td>
//                        <td style="width: 78%;">'.$inquiry_data['current_residential'].'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">How much rent are you currently paying?</td>
//                        <td style="width: 78%;">'."$". number_format($inquiry_data['current_rent_pay'],2,'.','').'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">Why are you moving homes?</td>
//                        <td style="width: 78%;">'.$inquiry_data['move_reason'].'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">How many people are wanting to stay?</td>
//                        <td style="width: 78%;">'.$inquiry_data['how_many_people_stay'].'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">Main applicant weekly income?</td>
//                        <td style="width: 78%;">'."$".  number_format($inquiry_data['main_applicant_weekly_income'],2,'.','').'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">Joint applicant weekly income?</td>
//                        <td style="width: 78%;">'."$". number_format($inquiry_data['joint_applicant_weekly_income'],2,'.','').'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">How many adults?</td>
//                        <td style="width: 78%;">'.$inquiry_data['how_many_adults'].'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">How many children?</td>
//                        <td style="width: 78%;">'.$inquiry_data['how_many_children'].'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">How many people are working?</td>
//                        <td style="width: 78%;">'.$inquiry_data['how_many_working'].'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">How many cars do you have? </td>
//                        <td style="width: 78%;">'.$inquiry_data['how_many_cars'].'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">Is there any potential reason that may affect your weekly rental payment? </td>
//                        <td style="width: 78%;">';
//                        
//                        if($inquiry_data['is_affect_weekly_rental_payment'] == 1){
//                            $str.='Yes';
//                        }
//                        if($inquiry_data['is_affect_weekly_rental_payment'] == 2){
//                            $str.='No';
//                        }
//                        if($inquiry_data['is_affect_weekly_rental_payment'] == 3){
//                            $str.=$inquiry_data['other_affect_weekly_rental_payment'];
//                        }                           
//                        $str.='</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">Is there anything else you would like to say?</td>
//                        <td style="width: 78%;">'.$inquiry_data['viewer_feedback'].'</td>
//                    </tr>
//                    <tr>
//                        <td style="width: 32%;">Note</td>
//                        <td style="width: 78%;">'.$inquiry_data['admin_note'].'</td>
//                    </tr>
//                </table>
//            </div>
//        </div>';
//            
//        $data = array(
//            'suceess' => true,
//            'result'=>$str
//        );           
//        echo json_encode($data);                        
//    }
    
    
    
    
    
    
    public function edit_note($rental_view_id) {
        if (isset($_POST['admin_note'])) {
            if ($_POST['admin_note'] && $_POST['admin_note'] != '') {
                $res = $this->Employee_m->edit_note($rental_view_id, $_POST);
                if ($res) {
                    //Success message : Complaint has been added
                    successOrErrorMessage("Data updated successfully", 'success');
                    redirect(EMPLOYEE_INQUIRY_LIST_LINK);
                } else {
                    //Error message
                    successOrErrorMessage("something happened wrong", 'error');
                }
            }
        }
        $data['res'] = $this->Employee_m->get_note_by_id($rental_view_id);
        $data['title'] = EMPLOYEE_EDIT_NOTE_TITLE;
        $this->load->employee_view('employee/editnote', $data);
    }
}
