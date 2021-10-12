<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PropertyView extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        include APPPATH . 'third_party/smtp_mail/smtp_send.php';
        $this->load->model('employeem/Employee_m');
        $this->load->model('jrefront/PropertyView_m');
        $this->load->model('jrefront/Customers_m');
    }

    public function index(){

        $properties = self::get_properties();

        $data['properties'] = $properties;

        $data['title'] = FRONT_PROPERTY_VIEW_TITLE;
        $this->load->front_view('jrefront/property_view', $data);
    }

    public function thank_you(){

        $data['title'] = FRONT_THANK_YOU_TITLE;
        $this->load->front_view('jrefront/thank_you', $data);
    }

    public function get_properties(){
        $properties = $this->PropertyView_m->get_properties();

        if(isset($properties['success']))
            return $properties['properties'];

        return array();
    }

    function prepare_input($string) {
        if (is_string($string)) {

            return trim(self::sanitize_string(stripslashes($string)));
        } elseif (is_array($string)) {
            reset($string);
            while (list($key, $value) = each($string)) {
                $string[$key] = self::prepare_input($value);
            }
            return $string;
        } else {
            return $string;
        }
    }

    function sanitize_string($string) {
        $string = preg_replace('/ +/', ' ', $string);
        return preg_replace("/[<>]/", '_', $string);
    }


    public function add_application(){

        if(isset($_REQUEST['property_submit'])){

            $property_address_id = (int)$_REQUEST['property_address_id'];
            $when_you_move_in  = $_REQUEST['when_you_move_in'];
            $viewer_name = self::prepare_input($_REQUEST['viewer_name']);
            $viewer_contact = self::prepare_input($_REQUEST['viewer_contact']);
            $viewer_email = self::prepare_input($_REQUEST['viewer_email']);
            $main_applicant_birthday = $_REQUEST['main_applicant_birthday'];
            $current_residential = self::prepare_input($_REQUEST['current_residential']);
            $current_rent_pay = (float)$_REQUEST['current_rent_pay'];
            $move_reason = self::prepare_input($_REQUEST['move_reason']);
            $how_many_people_stay = (int)$_REQUEST['how_many_people_stay'];
            $main_applicant_weekly_income = (float)$_REQUEST['main_applicant_weekly_income'];
            $joint_applicant_weekly_income = (float)$_REQUEST['joint_applicant_weekly_income'];
            $how_many_adults = (int)$_REQUEST['how_many_adults'];
            $how_many_children = (int)$_REQUEST['how_many_children'];
            $how_many_working = (int)$_REQUEST['how_many_working'];
            $how_many_cars = (int)$_REQUEST['how_many_cars'];
            $is_affect_weekly_rental_payment = (int)$_REQUEST['is_affect_weekly_rental_payment'];
            $other_affect_weekly_rental_payment = self::prepare_input($_REQUEST['other_affect_weekly_rental_payment']);
            $viewer_feedback = self::prepare_input($_REQUEST['viewer_feedback']);


            $date = date('Y:m:d H:i:s');

            $when_you_move_in = date("Y-m-d", strtotime($when_you_move_in));
                        
            $add_application_data = array(
              'property_address_id' => $property_address_id,
              'when_you_move_in' => $when_you_move_in,
              'viewer_name' => $viewer_name,
              'viewer_contact' => $viewer_contact,
              'viewer_email' => $viewer_email,
              'main_applicant_birthday' => $main_applicant_birthday,
              'current_residential' => $current_residential,
              'current_rent_pay' => $current_rent_pay,
              'move_reason' => $move_reason,
              'how_many_people_stay' => $how_many_people_stay,
              'main_applicant_weekly_income' => $main_applicant_weekly_income,
              'joint_applicant_weekly_income' => $joint_applicant_weekly_income,
              'how_many_adults' => $how_many_adults,
              'how_many_children' => $how_many_children,
              'how_many_working' => $how_many_working,
              'how_many_cars' => $how_many_cars,
              'is_affect_weekly_rental_payment' => $is_affect_weekly_rental_payment,
              'other_affect_weekly_rental_payment' => $other_affect_weekly_rental_payment,
              'viewer_feedback' => $viewer_feedback,
              'applicatation_created_date' => $date,
              'application_updated_date' => $date,
            );

            $application_id = $this->PropertyView_m->add_application($add_application_data);

            if($application_id){

                $customer_data = $this->Customers_m->customers_exist($viewer_email);

                $customers = array(
                    'customers_name' => $viewer_name ,
                    'customers_contact' => $viewer_contact,
                    'customers_email' => $viewer_email,
                    'date_of_birth' => $main_applicant_birthday,
                    'customers_residential_address' => $current_residential
                );

                if($customer_data['success']){
                    if($customer_data['customer_exist']){
                        //update the customers
                        $customers['updated_date'] = $date;
                        $customers_id = (int)$customer_data['customers_data']['customers_id'];
                        $this->Customers_m->update_customers($customers_id,$customers);

                    }else{
                        //create a new customers
                        $customers['created_date'] = $date;
                        $customers['updated_date'] = $date;
                        $this->Customers_m->add_customers($customers);
                    }
                }

                
                
                $property_data = $this->Employee_m->get_property_by_id($property_address_id);
                $maildata=array();
                $maildata['viewer_name']=$_REQUEST['viewer_name'];
                $maildata['viewer_contact']=$_REQUEST['viewer_contact'];
                $maildata['viewer_email']=$_REQUEST['viewer_email'];
                $maildata['property_address']=$property_data['property_address'];
                $maildata['date_time']=date("d-m-Y h:i:s A");
                $maildata['viewer_feedback']=$_REQUEST['viewer_feedback'];
                $maildata['how_many_children']=$_REQUEST['how_many_children'];                
                               
                $sendmail = new SMTP_mail();
                $res=$sendmail->contactusEmail($maildata);
                
                print_r($res);die;  
                
                successOrErrorMessage("Your application has been submit", 'success');
                redirect(FRONT_CONFIRMATION_APPLICATION);
            }else{
                successOrErrorMessage("Something went wrong try again!", 'error');
            }


        }else{
            successOrErrorMessage("Something went wrong try again!", 'error');
        }

        redirect('home');
    }
}