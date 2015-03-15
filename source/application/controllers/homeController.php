<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index()
	{
		$data['title'] = $this::loadCategories();
		$this->load->view('layouts/homeLayout', $data);
	}

	private function loadCategories()
	{
		$this->load->model('Categories_model');
		return $this->Categories_model->loadCategories();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */