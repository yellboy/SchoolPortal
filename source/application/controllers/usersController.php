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
	
	// Ajax post
	function setUserToShow() 
	{
		$data['id'] = $this->input->post('$id');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */