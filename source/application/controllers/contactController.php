<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class contactController extends CI_Controller {

		private $homeCategoryId = 2; // HACK
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Articles_model');
			$this->load->model('Categories_model');
		}
	
		public function index()
		{
			//$this->load->helper('profiler_helper');
			//SetProfiler($this);
			
			$routeId = $this->uri->segment($this->uri->total_segments());
			$categoryId = $this->homeCategoryId;

			if ($this->uri->total_segments() > 0 && is_numeric($routeId)){
				$categoryId = $routeId;
			}
			
			
			$category = $this->Categories_model->loadCategory($categoryId);
			
			if (count($category) == 0 || count($category) > 1 || ($category[0]->IsFixedRoute && $category[0]->Id != $this->homeCategoryId)){
				redirect('/', 'refresh'); // someone is trying to bypass - redirect
			}
			
			$category = $category[0];
			
			$data['categories'] = $this->Categories_model->loadCategoryMenu(); 
			$data['articles'] = $this->Articles_model->loadArticles($categoryId);
			$data['category'] = $category;
			$data['searchTerm'] = NULL;
			
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
			
			$this->load->view('layouts/contactLayout', $data);
		}
		
		public function search($searchTerm)
		{
			$data['categories'] = $this->Categories_model->loadCategoryMenu();
			$data['articles'] = $this->Articles_model->searchArticles($searchTerm);
			$data['category'] = $this->Categories_model->loadCategory(1)[0];
			$data['searchTerm'] = str_replace('%20', ' ', $searchTerm);
			
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
			
			$this->load->view('layouts/homeLayout', $data);
		}
	}