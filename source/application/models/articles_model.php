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
		$this->db->select('Id, Title, Content, CreatedByUserName, CreatedAt')->from('content')->where(array('CategoryId' => $categoryId, 'ContentType' => ContentTypes::Article, 'IsDeleted' => '0'));
		
		if (!$this->IsNullOrEmptyString($searchByName)){
			$this->db->like('Title', $searchByName);
		}
		
		if (!$this->IsNullOrEmptyString($searchByAuthor)){
			$this->db->like('CreatedByUserName', $searchByAuthor);
		}
		
		$this->db->order_by('CreatedAt', 'desc');
		return $this->db->get()->result();
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
		$articles = $this->db->select('Id, Title, Content')->get_where('content', array('Id' => $articleId, 'ContentType' => ContentTypes::Article, 'IsDeleted' => '0'))->result();
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
		$myFile = fopen($path, 'w');
		fwrite($myFile, $content);
		fclose($myFile);
		return $id;
	}
	
	function deleteArticle($id)
	{
		$data = array('IsDeleted' => 1);
		$this->db->where('id', $id);
		$this->db->update('content', $data); 
	}
	
	function SaveFile($categoryId, $title, $userId, $userName)
	{
		$fileName = './files/' . $_FILES["myfile"]["name"];
		$obj = new stdClass;
		$obj->IsDeleted = 0;
		$obj->Version = 1;
		$obj->ContentType = ContentTypes::File;
		$obj->Guid = uniqid();
		$obj->Content = '';
		$obj->Title = $title;
		$obj->CreatedByUserName = $userName;
		$obj->CreatedByUserId = $userId;
		$obj->CategoryId = $categoryId;
		$obj->FilePath = $fileName;
		$obj->CreatedAt = date("Y-m-d");
		$obj->LastModifiedAt = null;
		$this->db->insert('content', (array) $obj);
 		move_uploaded_file($_FILES["myfile"]["tmp_name"], $fileName);
	}
	
	function LoadFiles($categoryId)
	{
		return $this->db->get_where('content', array('ContentType' => ContentTypes::File, 'CategoryId' => $categoryId))->result();
	}
}
?>

