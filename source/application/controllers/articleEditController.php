<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ArticleEditController extends CI_Controller {

	public function index()
	{
		$data['categories'] = $this::loadCategories();
		$this->load->view('layouts/articleEditLayout', $data);
	}
	
	private function loadCategories()
	{
		$this->load->model('Categories_model');
		$categories = $this->Categories_model->loadCategoriesForJsTree();
		return json_encode($categories, JSON_UNESCAPED_UNICODE);
	}
	
	// ajax
	public function LoadArticleListForGrid() {
		$this->load->model('Articles_model');
		$categoryId = $this->input->post('categoryId');
		$result = $this->Articles_model->loadArticles($categoryId);
		echo json_encode($result, JSON_UNESCAPED_UNICODE);
	}
	
	// loadarticle, deletearticle, save article
}