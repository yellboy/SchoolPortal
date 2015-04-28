<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class alumniController extends CI_Controller {

	public function index()
	{
		$data['alumnus'] = $this::LoadAlumnus();
		
				///NOVI KOD
			if($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				
				//if( $session_data['authorizationid']==1){
					$data['id'] = $session_data['id'];
					$data['username'] = $session_data['username'];
					$data['isLogged'] = true; 
				/*}
				else{
					$data['isLogged'] = false; 
				}*/
			}
			else
			{
				$data['isLogged'] = false; 
			}
			//kraj novog koda
			
			
		$this->load->view('layouts/alumniLayout', $data); //send data to render slides here
	}
	
	public function LoadAlumnus()
	{
		$this->load->model('Alumnus_model');
		return $this->Alumnus_model->getAlumnus();
	}
	
	public function DeleteAlumni($id)
	{
		$this->load->model('Alumnus_model');		
		$alumnus = $this->Alumnus_model->Obrisi($this->input->post('id'));
	}
}