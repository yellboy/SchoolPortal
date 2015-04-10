<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserProfileController extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Users_model');
	}
	
	public function index($id)
	{
		$data['shownUser'] = $this::loadUser($id);
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['id'] = $session_data['id'];
		$this->load->view('layouts/userProfileLayout', $data);
	}
	
	private function loadUser($id)
	{
		$user = $this->Users_model->getUserById($id);
		$user->Photo = $this->getUserPhoto($id);
		return $user;
	}
	
	private function getUserPhoto($id)
	{
		return $this->Users_model->getUserPhoto($id);
	}
	
	public function SaveUserData()
	{
		if(RequireAuthentication())
		{
			$user = new stdClass;
			$user->Id = $this->input->post('id');
			$user->UserName = $this->input->post('userName');
			$user->FirstName = $this->input->post('firstName');
			$user->LastName = $this->input->post('lastName');
			$user->Email = $this->input->post('email');
			$user->About = $this->input->post('about');
			$this->Users_model->SaveUser($user);
			echo true;
		}
		return false;
	}
	
	public function ChangePassword() 
	{
		if(RequireAuthentication())
		{
			$id = $this->input->post('id');
			$oldPassword = $this->input->post('oldPassword');
			$newPassword = $this->input->post('newPassword');
			if ($this->Users_model->CheckPassword($id, $oldPassword))
			{
				$this->Users_model->SavePassword($id, $newPassword);
				echo true;
			}
		}
		echo false;
	}
	
	// Ajax post
	public function ChangePhoto()
	{
		if(RequireAuthentication())
		{
			$id = $this->input->post('id');
			$photo = $this->input->post('photo');
			$this->Users_model->SavePhoto($id, $photo);
			echo true;
		}
		echo false;
	}
}