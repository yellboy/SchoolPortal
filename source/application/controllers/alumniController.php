<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class alumniController extends CI_Controller {

	public function index()
	{
		$data['alumnus'] = $this::LoadAlumnus();
		$this->load->view('layouts/alumniLayout', $data); //send data to render slides here
	}
	
	public function LoadAlumnus()
	{
		$this->load->model('Alumnus_model');
		return $this->Alumnus_model->getAlumnus();
	}
}