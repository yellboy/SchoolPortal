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
	
	function loadArticles($categoryId)
	{
		return $this->db->get_where('content', array('CategoryId' => $categoryId, 'ContentType' => ContentTypes::Article))->result();
	}

}
?>

