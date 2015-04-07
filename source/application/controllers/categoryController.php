<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class CategoryController extends CI_Controller {

	private function _checkLogin(){
		if($this->session->userdata('logged_in'))
		{
			return true;
		}
		redirect('login', 'refresh');
		return false;
	}
	
	public function index()
	{
		if($this->_checkLogin())
		{
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['username'] = $session_data['username'];
			$data['categories'] = $this::loadCategories();
			$this->load->view('layouts/categoryLayout', $data);
		}
	}
	
	private function loadCategories()
	{
		if($this->_checkLogin())
		{
			$this->load->model('Categories_model');
			$categories = $this->Categories_model->loadCategoriesForJsTree();
			return json_encode($categories, JSON_UNESCAPED_UNICODE);
		}
		return 0;
	}
	
	public function DeleteCategory() {
		if($this->_checkLogin())
		{
			$this->load->model('Categories_model');
			$ids = $this->input->post('ids');
			$this->Categories_model->delete_categories($ids);
			echo implode(",", $ids);
		}
	}
	
	public function RenameCategory() {
		if($this->_checkLogin())
		{
			$this->load->model('Categories_model');
			$id = $this->input->post('id');
			$title = $this->input->post('title');
			$this->Categories_model->rename_category($id, $title);
			echo 'id:' . $id . 'of:' . $title;
		}
	}
	
	public function SaveCategory(){
		if($this->_checkLogin())
		{
			$this->load->model('Categories_model');
			$obj = new stdClass;
			$obj->Id = $this->input->post('id');
			$obj->Title = $this->input->post('title');
			$obj->ParentId = $this->input->post('parentId');
			$obj->Position = $this->input->post('position');
			$obj->HierarchyDepth = $this->input->post('level');
			$obj->HierarchyId = $this->input->post('hierarchy');
			$obj->IsCourse = $this->input->post('isCourse');
			
			$id = $this->Categories_model->save_category($obj);
			echo $id;
		}
	}
	
	public function UpdateCategory(){
		if($this->_checkLogin())
		{
			$this->load->model('Categories_model');
			$obj = new stdClass;
			$id = $this->input->post('id');
			$obj->ParentId = $this->input->post('parentId');
			$obj->Position = $this->input->post('position');
			$obj->HierarchyDepth = $this->input->post('level');
			$obj->HierarchyId = $this->input->post('hierarchy');
			
			$this->Categories_model->update_category($id, $obj);
			echo $id;
		}
	}
	
}