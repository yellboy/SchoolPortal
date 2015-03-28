<?php
class Categories_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	public function save_category($obj)
	{
		$obj->IsDeleted = 0;
		$obj->IsHidden = 0;
		$obj->Version = 1;
		$obj->Guid = uniqid();
		$this->db->insert('category', (array) $obj);
		$id = $this->db->insert_id(); 
		
		// $this->update_category($id, $obj);
		return $id;
	}

	public function update_category($id, $obj)
	{
		$obj->HierarchyId = $obj->HierarchyId . $id . '.';
		$this->db->where('id', $id);
		$this->db->update('category', (array) $obj); 
		// update all other positions on this level ... this is maybe going to be a problem
	}
	
	function rename_category($id, $title)
	{
		$data = array('Title' => $title);
		$this->db->where('id', $id);
		$this->db->update('category', $data); 
	}
	
	function delete_categories($ids)
	{
		foreach ($ids as $id){
			$this->_delete_category($id);
		}
	}
	
	private function _delete_category($id)
	{
		$data = array('IsDeleted' => 1);
		$this->db->where('id', $id);
		$this->db->update('category', $data); 
	}

	private function _get_category_children($id, $admin = 0)
	{
		if ($admin){
			return $this->db->select('Id, Id as id, Title as text')->order_by('Position', 'asc')->get_where('category', array('ParentId' => $id))->result();
		}
		
		return $this->db->select('Id, Title, Route, IsFixedRoute')->order_by('Position', 'asc')->get_where('category', array('IsHidden' => '0', 'IsDeleted' => '0', 'ParentId' => $id))->result();
	}
	
	// MM4ALL this will be cached for a long period - it's fast enough
	function loadCategories()
	{
		$categories = $this->_get_category_children('1');
		foreach ($categories as $category) {
			$category->children = $this->_get_category_children($category->Id);
			$category->ChildrenCount = count($category->children);
			$this->_load_children($category);
		}
		
		return $categories;
	}
	
	private function _load_children($category, $admin = 0){
		if ($category->ChildrenCount > 0){
			foreach ($category->children as $child) {
				$child->children = $this->_get_category_children($child->Id, $admin);
				$child->ChildrenCount = count($child->children);
				$this->_load_children($child, $admin);
			}
		}
	}
	
	// public
	function loadCategoriesForJsTree()
	{
		$categories = $this->_get_category_children(null, 1);
		foreach ($categories as $category) {
			$category->children = $this->_get_category_children($category->Id, 1);
			$category->ChildrenCount = count($category->children);
			$this->_load_children($category, 1);
		}
		
		return $categories;
	}
	
	// public
	function loadCategory($categoryId)
	{
		return $this->db->get_where('category', array('Id' => $categoryId))->result()[0];
	}

}
?>

