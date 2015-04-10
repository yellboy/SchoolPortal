<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class ArticleEditController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		if(RequireAuthentication())
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['id'] = $session_data['id'];
			$data['categories'] = $this::loadCategories();
			$this->load->view('layouts/articleEditLayout', $data);
		}
	}
	
	private function loadCategories()
	{
		if(RequireAuthentication())
		{
			$this->load->model('Categories_model');
			$categories = $this->Categories_model->loadCategoriesForJsTree();
			return json_encode($categories, JSON_UNESCAPED_UNICODE);
		}
		return 0;
	}
	
	public function LoadArticleListForGrid() {
		
		if(RequireAuthentication())
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
		if(RequireAuthentication())
		{
			$this->load->model('Articles_model');
			$id = $this->input->post('id');
			$result = $this->Articles_model->loadArticle($id);
			echo json_encode($result, JSON_UNESCAPED_UNICODE);
		}
	}
	
	public function SaveArticle(){
		if(RequireAuthentication())
		{
			$this->load->model('Articles_model');
			$session_data = $this->session->userdata('logged_in');
			$id = $this->input->post('id');
			$obj = new stdClass;
			$obj->Title = $this->input->post('title');
			$obj->Content = $this->input->post('content');
			$obj->CategoryId = $this->input->post('categoryId');
			$obj->CreatedByUserName = $session_data['username'];
			$obj->CreatedByUserId = $session_data['id'];
			
			$result = $this->Articles_model->saveArticle($id, $obj);
			echo json_encode($result, JSON_UNESCAPED_UNICODE);
		}
	}
	
	public function DeleteArticle(){
		if(RequireAuthentication())
		{
			$this->load->model('Articles_model');
			$id = $this->input->post('id');
			$this->Articles_model->deleteArticle($id);
			echo $id;
		}
	}
	
}