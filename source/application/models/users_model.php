<?php 

	class Users_model extends CI_model 
	{
		
		var $users = array();
		
		function __construct()
		{
			parent::__construct();
		}
		
		private function _loadUsers() 
		{	
			$users = $this->db->get('user');
		}
		
		function getUsers() 
		{
			$users = $this->db->get('user')->result();
			return $users;
		}
		
		function getUserById($id) 
		{
			return $this->db->get_where('user', array('Id' => $id))->result()[0];
		}
		
		function login($username, $password)
		{
			$this->db->select('id, username, password');
			$this->db->from('user');
			$this->db->where('username', $username);
			$this->db->where('password', MD5($password));
			$this->db->limit(1);
			
			$query = $this->db->get();
			
			if($query->num_rows() == 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
	}
?>