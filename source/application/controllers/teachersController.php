<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class teachersController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
	}
		
	public function index()
	{
		$data['teachers'] = $this::loadTeachers();
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['isLogged'] = true; 
		}
		else{
			$data['isLogged'] = false; 
		}	
	
		$this->load->view('layouts/teachersLayout', $data);
	}
	
	private function loadTeachers()
	{
		return $this->Users_model->getUsers();
	}
}
