<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UsersController extends CI_Controller {

	public function index()
	{
		$data['users'] = $this::loadUsers();
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['id'] = $session_data['id'];
		$this->load->view('layouts/usersLayout', $data);
	}
	
	private function loadUsers() 
	{
		$this->load->model('Users_model');
		return $this->Users_model->getUsers();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */