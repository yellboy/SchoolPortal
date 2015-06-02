<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addToAlumniController extends CI_Controller {

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
		
		$this->load->view('layouts/addToAlumniLayout', $data);
	}
	
	public function addAlumnus()
	{
		//$this->load->library("security");
		//$this->security->xss_clean($data);
	
		$this->load->model('Alumnus_model');
		$alumnus = $this->Alumnus_model->Dodaj(1, $this->input->post('firstName'), $this->input->post('lastName'), $this->input->post('city'), $this->input->post('state'), $this->input->post('email'), $this->input->post('year'), $this->input->post('grade'));
	}
}