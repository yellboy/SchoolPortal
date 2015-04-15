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
		return $this->db->select('Id, Title, Content')->get_where('content', array('Id' => $articleId, 'ContentType' => ContentTypes::Article))->result();
	}
	
	function saveArticle($id, $obj)
	{
		if ((int) $id > 0)
		{
			$obj->LastModifiedAt = date("Y-m-d");
			$this->db->where('id', $id);
			$this->db->update('content', (array) $obj); 
			return $id;
		}
		else
		{
			$obj->IsDeleted = 0;
			$obj->Version = 1;
			$obj->ContentType = ContentTypes::Article;
			$obj->Guid = uniqid();
			$obj->CreatedAt = date("Y-m-d");
			$obj->LastModifiedAt = null;
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

