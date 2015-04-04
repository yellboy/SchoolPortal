<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addToAlumniController extends CI_Controller {

	public static $id = 4;

	public function index()
	{
		//$data['alumnus'] = $this::DodajAlumni();
		$this->load->view('layouts/addToAlumniLayout'); //send data to render slides here
	}
	
	public function DodajAlumni($firstName, $lastName)	//Izbaciti ove parametre???
	{
		$this->load->model('Alumnus_model');		
			
		$alumnus = $this->Alumnus_model->Dodaj(self::$id, $this->input->post('firstName'), $this->input->post('lastName'), $this->input->post('city'), $this->input->post('state'), $this->input->post('email'), $this->input->post('year'), $this->input->post('grade'));
	}
}