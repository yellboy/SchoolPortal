<?php

abstract class ContentTypes
{
	const Article = 1;
	const File = 2;
}

class Articles_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	private function IsNullOrEmptyString($question){
		return (!isset($question) || trim($question)==='');
	}
	
	function loadArticles($categoryId, $searchByName = null, $searchByAuthor = null)
	{
		$this->db->select('Id, Title, Content, CreatedByUserName, CreatedAt')->from('content')->where(array('CategoryId' => $categoryId));
		
		if (!$this->IsNullOrEmptyString($searchByName)){
			$this->db->like('Title', $searchByName);
		}
		
		if (!$this->IsNullOrEmptyString($searchByAuthor)){
			$this->db->like('CreatedByUserName', $searchByAuthor);
		}
		
		$this->db->order_by('CreatedAt', 'desc');
		$articles = $this->db->get()->result();
		// Dirty solution, refactoring needed
		foreach ($articles as $article)
		{
			$path = $article->Content;
			$file = fopen($path, 'r');
			$content = fread($file, filesize($path));
			fclose($file);
			$article->Content = $content;
		}
		return $articles;
	}
	
	function searchArticles($searchText){
		$this->db->select('Id, Title, Content, CreatedByUserName, CreatedAt')->from('content')->where(array('ContentType' => ContentTypes::Article, 'IsDeleted' => '0'));
		$this->db->or_like('Title', $searchText);
		$this->db->or_like('Content', $searchText);
		$this->db->or_like('CreatedByUserName', $searchText);
		return $this->db->get()->result();
	}
	
	function loadArticle($articleId)
	{
		$articles = $this->db->select('Id, Title, Content')->get_where('content', array('Id' => $articleId, 'ContentType' => ContentTypes::Article))->result();
		// Dirty solution, refactoring needed.
		foreach ($articles as $article)
		{
			$path = $article->Content;
			$file = fopen($path, 'r');
			$content = fread($file, filesize($path));
			fclose($file);
			$article->Content = $content;
		}
		return $articles;
	}
	
	function saveArticle($id, $obj)
	{
		$content = $obj->Content;
		if ((int) $id > 0)
		{
			$obj->LastModifiedAt = date("Y-m-d");
			$path = './contents/' . $id . '.html';
			$obj->Content = $path;
			$this->db->where('id', $id);
			$this->db->update('content', (array) $obj);
		}
		else
		{
			$obj->IsDeleted = 0;
			$obj->Version = 1;
			$obj->ContentType = ContentTypes::Article;
			$obj->Guid = uniqid();
			$obj->Content = '';
			$obj->CreatedAt = date("Y-m-d");
			$obj->LastModifiedAt = null;
			$this->db->insert('content', (array) $obj);
			$id = $this->db->insert_id();
			$path = './contents/' . $id . '.html';
			$obj->Content = $path;
			$this->db->where('Id', $id);
			$this->db->update('content', (array) $obj);
		}
		// This comment should stay for now, just in case we need this code again
		// $myFile = fopen($path, 'w');
		// fwrite($myFile, $content);
		// fclose($myFile);
		// $articles = $this->db->get('content')->result();
		// foreach ($articles as $article)
		// {
			// $content = $article->Content;
			// $path = './contents/' . $article->Id . '.html';
			// $article->Content = $path;
			// $myFile = fopen($path, 'w');
			// fwrite($myFile, $content);
			// fclose($myFile);
			// $this->db->where('Id', $article->Id);
			// $this->db->Update('content', $article);
		// }
		return $id;
	}
	
	function deleteArticle($id)
	{
		$data = array('IsDeleted' => 1);
		$this->db->where('id', $id);
		$this->db->update('content', $data); 
	}
}
?>

