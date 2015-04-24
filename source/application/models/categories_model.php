<?php
class Categories_model extends CI_Model {
	
	public function save_category($obj)
	{
		$obj->IsDeleted = 0;
		$obj->IsHidden = 0;
		$obj->Version = 1;
		$obj->Guid = uniqid();
		$this->db->insert('category', $obj);
		$id = $this->db->insert_id(); 
		
		// $this->update_category($id, $obj);
		return $id;
	}

	public function update_category($id, $obj)
	{
		$obj->HierarchyId = $obj->HierarchyId . $id . '.';
		$this->db->where('id', $id);
		$this->db->update('category', (array) $obj); 
		// update all other positions on this level 
		// this is maybe going to be a problem
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

	private function _get_category_children($id)
	{
		return $this->db->select('Id, Id as id, Title as text')->order_by('Position', 'asc')->get_where('category', array('ParentId' => $id))->result();
	}
	
	private function _load_children($category){
		if ($category->ChildrenCount > 0){
			foreach ($category->children as $child) {
				$child->children = $this->_get_category_children($child->Id);
				$child->ChildrenCount = count($child->children);
				$this->_load_children($child);
			}
		}
	}
	
	public function LoadCourses()
	{
		return $this->db->get_where('category', array('IsCourse' => 1))->result();
	}
	
	public function GetUserCategoryRelations($id)
	{
		return $this->db->select('CategoryId')->get_where('usercategory', array('UserId' => $id))->result();
	}
	
	public function loadCategoriesForJsTree()
	{
		$categories = $this->_get_category_children(null);
		foreach ($categories as $category) {
			$category->children = $this->_get_category_children($category->Id);
			$category->ChildrenCount = count($category->children);
			$this->_load_children($category);
		}
		
		return $categories;
	}
	
	public function loadCategory($categoryId)
	{
		return $this->db->get_where('category', array('Id' => $categoryId))->result();
	}
	
	public function loadCategoryMenu(){
		$queryResult = $this->db->order_by('Position', 'asc')->get_where('category', array('IsHidden' => '0', 'IsDeleted' => '0'))->result();
		$resultTree = $this->_getChildrenFromQuery($queryResult, 1);
		return $resultTree;
	}
	
	private function _getChildrenFromQuery($query, $id){
		$tree = array();
		foreach ($query as $cat)
		{
			if ($cat->ParentId == $id){
				$obj = new stdClass();
				$obj->Id = $cat->Id;
				$obj->Title = $cat->Title;
				$obj->Route = $cat->Route;
				$obj->IsFixedRoute = $cat->IsFixedRoute;
				$obj->Children = $this->_getChildrenFromQuery($query, $cat->Id);
				
				if (isset($obj->Children))
				{
					$obj->ChildrenCount = count($obj->Children);
				}
				else
				{
					$obj->ChildrenCount = 0;
				}
				
				array_push($tree, $obj);
			}
		}
		return $tree;
	}

}
?>

