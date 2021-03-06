<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Request_credentials extends CI_Controller {
	
	public function index($error="")
	{
		$data['page_title'] = 'Request Credentials';
		$data['current_page'] = 'signup';
		
		$this->load->view('common/header', $data);
		$this->load->view('pages/request_credentials/request_credentials_page');
		$this->load->view('common/footer');
	}
	
	public function do_action()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('full_name', 'Full Name', 'required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'required|valid_email');
		
		if ($this->form_validation->run() == FALSE) {
			$error = validation_errors();
			$this->index($error);
		} else {
			
			$this->load->model('users_model');
			$password = substr( sha1($this->users_model->generate_secure_keys(@time(), rand())), 1, 12);
			
			$this->users_model->create_user(
				$this->input->post('full_name', TRUE),
				$this->input->post('email_address', TRUE),
				$password
			);
			
			if (SEND_EMAIL) {
				
				$this->load->library('email');
				
				$config['mailtype'] = 'html';
				$this->email->initialize($config);

				$this->email->from('info@vitalye.me', 'Investor Login Application');
				$this->email->to(REQUEST_CREDENTIALS_SEND_TO_EMAIL); 
				
				$this->email->subject('Request Credentials: Investor Login Application');
				
				$msg = "Someone has requested login credentials. Please login to the <a href='".site_url('login')."'>admin panel</a>. <br><br><strong>Person Details</strong><br><br>";
				$msg .= "Full Name: ".ucwords($this->input->post('full_name', TRUE));
				$msg .= "<br>Email Address: ".$this->input->post('email_address', TRUE);
				
				$this->email->message($msg);	
				
				$this->email->send();
				
			}
			
			redirect('confirmation/success');
			
			
		}
	}
	
	public function success()
	{
		$data['page_title'] = 'Request Credentials';
		
		$this->load->view('common/header', $data);
		$this->load->view('pages/request_credentials/success_page');
		$this->load->view('common/footer');
	}
	
}

/* End of file request_credentials.php */
/* Location: ./application/controllers/request_credentials.php */