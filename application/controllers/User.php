<?php 

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Registrationmodel');
	}

	public function signup()
	{
		$this->load->view('user_registration');
	}

	// public function registration()
	// {
	// 	if(isset($_POST['signup']))
	// 	{
	// 		// print_r($_POST); die;
	// 		$this->form_validation->set_rules('Name', 'Name', 'trim|required');
	// 		$this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email|is_unique[users.Email]');
	// 		$this->form_validation->set_rules('Password', 'Password', 'required');
	// 		$this->form_validation->set_error_delimiters('<span class="form_error">', '</span>');
	// 		$this->form_validation->set_message('required', '%s is required');
	// 		$this->form_validation->set_message('is_unique', '%s is already exists, please try another email');
	// 		$this->form_validation->set_message('valid_email', 'Invalid %s, please try with valid email');
	// 		if ($this->form_validation->run() == FALSE)
	// 		{
	// 			$this->load->view('user_registration');
	// 		}
	// 		else
	// 		{
	// 			$data = array(
	// 					'Name'     => $this->input->post('Name'),
	// 					'Email'    => $this->input->post('Email'),
	// 					// 'Password' => $this->hash_password($this->input->post('Password')
	// 				);
	// 			);
	// 			$data = $this->security->xss_clean($data);
	// 			$register = $this->Registrationmodel->registration($data);
	// 			if($register)
	// 			{
	// 				$this->session->set_userdata('succ', 'Registration has been successfull...!');
	// 				return redirect('Home');
	// 			}
	// 		}
	// 	}
	// }

	// To generate hash password
	// public function hash_password($password)
	// {
	//    return password_hash($password, PASSWORD_BCRYPT);
	// }
}