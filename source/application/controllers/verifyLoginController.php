<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class VerifyLoginController extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			$this->load->model('users_model','',TRUE);
		}

		function index()
		{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('layouts/loginLayout');
			}
			else
			{
				redirect('/', 'refresh'); // logged
			}
		}

		function check_database($password)
		{
			//Field validation succeeded.  Validate against database
			$username = $this->input->post('username');

			//query the database
			$result = $this->users_model->login($username, $password);

			if($result)
			{
				$sess_array = array();
				foreach($result as $row)
				{
					$sess_array = array(
						'id' => $row->id,
						'username' => $row->username,
						'authorizationid' => $row->authorizationid
					);
					$this->session->set_userdata('logged_in', $sess_array);
					$this->session->set_userdata('authorizationid', $sess_array->authorizationid);
				}
				return TRUE;
			}
			else
			{
				$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
				$this->form_validation->set_message('check_database', $this->lang->line('LoginError') . "!");
				return FALSE;
			}
		}
	}
?>