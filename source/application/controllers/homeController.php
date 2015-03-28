<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeController extends CI_Controller {

	private $homeCategoryId = 2; // HACK
	
	public function index()
	{
		$this->load->model('Articles_model');
		$this->load->model('Categories_model');
				
		$routeId = $this->uri->segment($this->uri->total_segments());
		$categoryId = $this->homeCategoryId;

		if ($this->uri->total_segments() > 0 && is_numeric($routeId)){
			$categoryId = $routeId;
		}
		
		$category = $this->Categories_model->loadCategory($categoryId); // if category cannot be found - go to 301
		
		$data['categories'] = $this->Categories_model->loadCategories();
		$data['articles'] = $this->Articles_model->loadArticles($categoryId);
		$data['category'] = $category; // exclude from cache
		
		$this->load->view('layouts/homeLayout', $data);
	}
}