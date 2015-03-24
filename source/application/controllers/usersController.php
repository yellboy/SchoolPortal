<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UsersController extends CI_Controller {

	public function index()
	{
		$data['users'] = $this::loadUsers();
		
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