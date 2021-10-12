<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_c extends CI_Controller {

    public function __construct() {
        parent::__construct();
        include APPPATH . 'third_party/image-resize/imageresize.php';
        $this->load->model('employeem/Employee_m');
    }

//    public function index() { 
//        $data['notification']=$this->Employee_m->get_notification_list();                  
//        $data['notice']=$this->Employee_m->get_notice_list();        
//        $data['title'] = FRONT_HOME_TITLE;        
//        $this->load->front_view('frontside/home',$data);
//    }
//    public function about() {        
//        $data['title'] = FRONT_ABOUT_TITLE;        
//        $this->load->front_view('frontside/about',$data);
//    }
//                
    public function inquiry_form() {
        if (isset($_POST['students_fullname'])) {
            unset($_POST['g-recaptcha-response']);
            if ($_POST['students_fullname'] && $_POST['students_fullname'] != '') {
                $res = $this->Employee_m->add_student($_POST);
                if ($res) {
                    //Success message : Complaint has been added
                    successOrErrorMessage("Your registration successfully. Admin will contact you soon", 'success');
                    redirect(FRONT_INQUIRY_REGISTRATION_LINK);
                } else {
                    //Error message
                    successOrErrorMessage("something happened wrong", 'error');
                }
            }
        }      
        $data['title'] = FRONT_INQUIRY_TITLE;
        $this->load->front_view('frontside/inquiry', $data);
    }

    public function page404() {
        $data['title'] = FRONT_404_TITLE;
        $this->load->single_page('errors/html/custome_error_404', $data);
    }

}
