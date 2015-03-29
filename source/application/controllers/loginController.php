<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index()
	{
		$this->load->helper(array('form'));
		$this->load->view('layouts/loginLayout');
	}
	
	function logout()
	{
		if($this->session->userdata('logged_in')){
			$this->session->unset_userdata('logged_in');
			$has_session = session_status() == PHP_SESSION_ACTIVE;
			if ($has_session){
				session_destroy();
			}
			redirect('/', 'refresh');
		}
	}
}
