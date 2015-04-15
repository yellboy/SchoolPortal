<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class alumniController extends CI_Controller {

	public function index()
	{
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
	
		$data['alumnus'] = $this::LoadAlumnus();
		$this->load->view('layouts/alumniLayout', $data);
	}
	
	public function LoadAlumnus()
	{
		$this->load->model('Alumnus_model');
		return $this->Alumnus_model->getAlumnus();
	}
}