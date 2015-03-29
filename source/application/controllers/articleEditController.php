<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class ArticleEditController extends CI_Controller {

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
			$data['username'] = $session_data['username'];
			$data['categories'] = $this::loadCategories();
			$this->load->view('layouts/articleEditLayout', $data);
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
	
	public function LoadArticleListForGrid() {
		
		if($this->_checkLogin())
		{
			$this->load->model('Articles_model');
			$categoryId = $this->input->post('categoryId');
			$searchByName = $this->input->post('searchByName');
			$searchByAuthor = $this->input->post('searchByAuthor');
			$result = $this->Articles_model->loadArticles($categoryId, $searchByName, $searchByAuthor);
			echo json_encode($result, JSON_UNESCAPED_UNICODE);
		}
	}
	
	public function LoadArticle(){
		if($this->_checkLogin())
		{
			$this->load->model('Articles_model');
			$id = $this->input->post('id');
			$result = $this->Articles_model->loadArticle($id);
			echo json_encode($result, JSON_UNESCAPED_UNICODE);
		}
	}
	
	public function SaveArticle(){
		if($this->_checkLogin())
		{
			$this->load->model('Articles_model');
			$id = $this->input->post('id');
			$obj = new stdClass;
			$obj->Title = $this->input->post('title');
			$obj->Content = $this->input->post('content');
			$obj->CategoryId = $this->input->post('categoryId');
			$result = $this->Articles_model->saveArticle($id, $obj);
			echo json_encode($result, JSON_UNESCAPED_UNICODE);
		}
	}
	
	public function DeleteArticle(){
		if($this->_checkLogin())
		{
			$this->load->model('Articles_model');
			$id = $this->input->post('id');
			$this->Articles_model->deleteArticle($id);
			echo $id;
		}
	}
	
}