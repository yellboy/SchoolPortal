<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// MM4MM authorize
class CategoryController extends CI_Controller {

	public function index()
	{
		$data['categories'] = $this::loadCategories();
		$this->load->view('layouts/categoryLayout', $data);
	}
	
	private function loadCategories()
	{
		$this->load->model('Categories_model');
		$categories = $this->Categories_model->loadCategoriesForJsTree();
		return json_encode($categories, JSON_UNESCAPED_UNICODE);
	}
	
	
	// ajax
	public function deleteCategory() {
		$this->load->model('Categories_model');
		$ids = $this->input->post('ids');
		$this->Categories_model->delete_categories($ids);
		// set IsDeleted = 1 foreach id
		echo implode(",", $ids);
	}
}