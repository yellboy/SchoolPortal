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
	public function DeleteCategory() {
		$this->load->model('Categories_model');
		$ids = $this->input->post('ids');
		$this->Categories_model->delete_categories($ids);
		echo implode(",", $ids);
	}
	
	public function RenameCategory() {
		$this->load->model('Categories_model');
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$this->Categories_model->rename_category($id, $title);
		echo 'id:' . $id . 'of:' . $title;
	}
	
	public function SaveCategory(){
		$this->load->model('Categories_model');
		$obj = new stdClass;
		$obj->Id = $this->input->post('id');
		$obj->Title = $this->input->post('title');
		$obj->ParentId = $this->input->post('parentId');
		$obj->Position = $this->input->post('position');
		
		$id = $this->Categories_model->save_category($obj);
		echo $id;
	}
	
}