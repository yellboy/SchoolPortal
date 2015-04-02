<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserProfileController extends CI_Controller {
	
	// See how to call this method without copy-paste.
	private function _checkLogin(){
		if($this->session->userdata('logged_in'))
		{
			return true;
		}
		redirect('login', 'refresh');
		return false;
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
		$this->load->model('Users_model');
		return $this->Users_model->getUserById($id);
		
	}
	
	public function SaveUserData()
	{
		if ($this->_checkLogin())
		{
			$user = new stdClass;
			$user->Id = $this->input->post('id');
			$user->UserName = $this->input->post('userName');
			$user->FirstName = $this->input->post('firstName');
			$user->LastName = $this->input->post('lastName');
			$user->Email = $this->input->post('email');
			$user->About = $this->input->post('about');
			$this->load->model('Users_model');
			$this->Users_model->SaveUser($user);
			echo true;
		}
		return false;
	}
}