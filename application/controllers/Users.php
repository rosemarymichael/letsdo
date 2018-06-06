<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Users extends CI_Controller {
     
    var $data;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Users_model','Users');

    }
    public function index() {  
        $this->load->view('admin/includes/sidebar');
    }
    public function signin(){

        if($this->input->post()) {
  
                   
            $this->form_validation->set_error_delimiters('<div class="error" style="color:red">', '</div>');
            $this->form_validation->set_rules('user_email','Email','required|valid_email');
            $this->form_validation->set_rules('user_password', 'Password', 'required');
            if ($this->form_validation->run() == false){
                
                $this->data['error_message'] = validation_errors();

            }
            else{
                
                $this->data['arr_data'] = $_POST;
                $arr_data = array('user_email'=>$this->data['arr_data']['user_email'],
                                  'user_password'=>$this->data['arr_data']['user_password']);
                $user = $this->users->get_row_user($arr_data);
                if($user['user_email'] == $arr_data['user_email'] &&  $user['user_password'] == $arr_data['user_password'] && $user['user_type'] == 'A' ){
                    $this->session->set_userdata('USERID', $user['id']);       
                    $this->session->set_userdata('USER_EMAIL', $user['user_email']);
                    $this->session->set_userdata('USER_LOGIN', TRUE);
                    $this->session->set_userdata('USER_YPE', $user['user_type']);
                    redirect('users/dashboard');

                }else{
                   
                    $this->data['message'] = 'Please provide valid credentials';
                }
                
            } 

        }

    	$this->load->view('users/signin');
    }
    public function signup(){
       
        if($this->input->post()) {
  
                   
            /*$this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
            $this->form_validation->set_rules('first_name','First Name','required');
            $this->form_validation->set_rules('last_name','Last Name','required');
            $this->form_validation->set_rules('user_email','Email','required|valid_email');
            $this->form_validation->set_rules('user_password', 'Password', 'required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');
           
            if ($this->form_validation->run() == false){
                
                $this->data['error_message'] = validation_errors();

            }*/
           /* else{
                
                $this->data['arr_data'] = $_POST;
                               
            } */

        }

         
       	$this->load->view('users/signup',$this->data);
    }
    public function dashboard(){

        $this->data['message'] = 'Logged in successfully.';
        $this->load->view('users/dashboard',$this->data);

    }
    public function logout(){
       
        redirect('users/signin');

    }
    

}