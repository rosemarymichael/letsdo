<?php

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		//$this->load->model('Employee_model');
		$this->load->library('session');
		//$this->emp_id = $this->session->userdata('emp_id');
	}
	function index()
 	{

	}public function login()
	{
		if(isset($_POST))
		{

			//Including validation library
			$this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			//Validating Email Field
			$this->form_validation->set_rules('email','Email','required|valid_email');
			//Validating Password Field
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
			if ($this->form_validation->run() == false)
			 {
				$this->data['error_message']=validation_errors();
			 }
			 else
			 {
			 	$arr_data = array(
							
							'user_email' => $this->input->post('email'),
							'user_password' => md5($this->input->post('password'))
											
						);

			 	$log_details = $this->user->check_login($arr_data);

			 	if($log_details)
			 	{
			 		alert('Logged in succcessfully');
			 	}
			 }
		}

		$this->load->view('user/login');
	}

	public function logout()
	{
	 	redirect('admin/login');

	 }


}
?>