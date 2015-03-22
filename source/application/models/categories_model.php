<?php
class Categories_model extends CI_Model {

	var $categories = array();

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	function get_last_ten_entries()
	{
		//$query = $this->db->get('entries', 10);
		//return $query->result();
	}

	function insert_entry()
	{
		//$this->title   = $_POST['title']; // please read the below note
		//$this->content = $_POST['content'];
		//$this->date    = time();

		//$this->db->insert('entries', $this);
	}

	function update_entry()
	{
		//$this->title   = $_POST['title'];
		//$this->content = $_POST['content'];
		//$this->date    = time();

		//$this->db->update('entries', $this, array('id' => $_POST['id']));
	}
	
	private function _get_category_level($level)
	{
		return $this->db->order_by('Position', 'asc')->get_where('category', array('IsHidden' => '0', 'HierarchyDepth' => $level))->result();
	}

	private function _get_category_children($id)
	{
		return $this->db->order_by('Position', 'asc')->get_where('category', array('IsHidden' => '0', 'ParentId' => $id))->result();
	}

	function loadCategories()
	{
		// MM4ALL this will be cached for a long period, it's not optimisation problem
		$categories = $this->_get_category_level('1');
		foreach ($categories as $category) {
			$category->Children = $this->_get_category_children($category->Id);
			$category->ChildrenCount = count($category->Children);
			
			if ($category->ChildrenCount > 0){ // this is not a optimisation risc since there are only 3 sublevels
				foreach ($category->Children as $level2) {
					$level2->Children = $this->_get_category_children($level2->Id);
					$level2->ChildrenCount = count($level2->Children);
				}
			}
		}
		
		return $categories;
	}

}
?>

