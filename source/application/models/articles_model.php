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
		$this->db->select('Id, Title, Content, CreatedByUserName, Route, CreatedAt')->from('content')->where(array('CategoryId' => $categoryId, 'ContentType' => ContentTypes::Article, 'IsDeleted' => '0'));
		
		if (!$this->IsNullOrEmptyString($searchByName)){
			$this->db->like('Title', $searchByName);
		}
		
		if (!$this->IsNullOrEmptyString($searchByAuthor)){
			$this->db->like('CreatedByUserName', $searchByAuthor);
		}
		
		$this->db->order_by('CreatedAt', 'asc');
		return $this->db->get()->result();
	}
	
	function loadArticle($articleId)
	{
		return $this->db->select('Id, Title, Content')->get_where('content', array('Id' => $articleId, 'ContentType' => ContentTypes::Article))->result();
	}
	
	function saveArticle($id, $obj)
	{
		if ((int) $id > 0){
			$obj->LastModifiedAt = date("Y-m-d");
			$this->db->where('id', $id);
			$this->db->update('content', (array) $obj); 
			// todo generate route somehow
			return $id;
		}
		else{
			$obj->IsDeleted = 0;
			$obj->Version = 1;
			$obj->ContentType = ContentTypes::Article;
			$obj->Guid = uniqid();
			$obj->CreatedAt = date("Y-m-d");
			$obj->LastModifiedAt = null;
			// todo set logged user as owner
			// todo generate route somehow
			$this->db->insert('content', (array) $obj);
			return $this->db->insert_id();
		}
	}
	
	function deleteArticle($id)
	{
		$data = array('IsDeleted' => 1);
		$this->db->where('id', $id);
		$this->db->update('content', $data); 
	}

}
?>

