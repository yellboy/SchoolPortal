<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UsersController extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
	}
	
	public function index()
	{
		if (RequireAuthentication())
		{
			$data['users'] = $this::loadUsers();
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['id'] = $session_data['id'];
			$this->load->view('layouts/usersLayout', $data);
		}
	}
	
	private function loadUsers() 
	{
		if(RequireAuthentication())
		{	
			return $this->Users_model->getUsers();
		}
	}
	
	public function AddNewUser() 
	{
		if (IsAdministrator()){
			$username = $this->input->post('username');
			$isAdmod = $this->input->post('isAdmod');
			$role = 2;
			if ($isAdmod) 
			{
				$role = 1;
			}
			$newUser = $this->Users_model->CreateUser($username, $role);
			if ($newUser == null)
			{
				$this->output->set_status_header(400);
				$this->data['message'] = 'Bad request';
				echo json_encode($this->data);
			}
			echo json_encode($newUser);
		}
	}
	
	public function DeleteUser()
	{
		if (IsAdministrator()){
			$id = $this->input->post('id');
			echo $this->Users_model->DeleteUser($id);
		}
	}
}