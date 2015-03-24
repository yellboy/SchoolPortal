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
			$users = $this->db->get('users');
		}
		
		function getUsers() 
		{
			$users = $this->db->get('users')->result();
			return $users;
		}
		
	}
?>