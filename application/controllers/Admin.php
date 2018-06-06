<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends MY_Controller {
     
    public function index() {  
        $this->load->view('admin/includes/sidebar');
    }
    function dashboard()
	{	
	    /*if(!$this->session->userdata('SESS_ADMINID')) 
			redirect("admin");
	  	$this->load->view("admin/dashboard");*/
	}
    
}