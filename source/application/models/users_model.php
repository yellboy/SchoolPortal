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
		
		function GetUserPhoto($id)
		{
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('Id', $id);
			$this->db->limit(1);
			
			$query = $this->db->get();
			
			if ($query->num_rows() == 1)
			{
				$photoPath = $query->result()[0]->PhotoPath;
				$file = fopen($photoPath, 'r');
				$photo = fread($file, filesize($photoPath));
				fclose($file);
				return $photo;
			}
			return null;
		}
		
		function login($username, $password)
		{
			$this->db->select('id, username, password, authorizationid');
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
		
		function SaveUser($user)
		{
			$this->db->where('id', $user->Id);
			$this->db->update('user', $user);
		}
		
		public function CheckPassword($id, $password) 
		{
			$result = $this->db->get_where('user', array('Id' => $id, 'Password' => MD5($password)));
			return $result->num_rows() == 1;
		}
		
		function SavePassword($id, $password)
		{
			$this->db->where('Id', $id);
			$this->db->set('Password', MD5($password));
			$this->db->update('user');
		}
		
		function SavePhoto($id, $photo) 
		{
			$path = './photos/' . $id . '.jpg';
			$myFile = fopen($path, 'w');
			fwrite($myFile, $photo);
			fclose($myFile);
			$this->db->where('Id', $id);
			$this->db->set('PhotoPath', $path);
			$this->db->update('user');
		}
		
	}
?>