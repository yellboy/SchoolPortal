<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserProfileController extends CI_Controller {

	public function index($id)
	{
		$data['user'] = $this::loadUser($id);
		$this->load->view('layouts/userProfileLayout', $data);
	}
	
	private function loadUser($id)
	{
		$this->load->model('Users_model');
		return $this->Users_model->getUserById($id);
		
	}
}