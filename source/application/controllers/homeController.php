<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeController extends CI_Controller {

	private $categoryId = 2;
	
	public function index()
	{
		$data['categories'] = $this->loadCategories();
		$data['articles'] = $this->loadArticles();
		$this->load->view('layouts/homeLayout', $data);
	}

	private function loadCategories()
	{
		$this->load->model('Categories_model');
		return $this->Categories_model->loadCategories();
	}
	
	private function loadArticles()
	{
		$this->load->model('Articles_model');
		return $this->Articles_model->loadArticles($this->categoryId);
	}
}