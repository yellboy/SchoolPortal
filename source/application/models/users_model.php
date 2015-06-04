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
		
		function getTeachers()
		{
			return $this->db->get_where('user', array('AuthorizationId' => 2))->result();
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
			$this->db->where('Id', $user->Id);
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
		
		function AddCourseToUser($userId, $courseId) 
		{
			$object = new stdClass(); 
			$object->UserId = $userId;
			$object->CategoryId = $courseId;
			$this->db->insert('usercategory', $object);
		}
		
		function RemoveCourseFromUser($userId, $courseId) 
		{ 
			$this->db->where('UserId', $userId);
			$this->db->where('CategoryId', $courseId);
			$this->db->delete('usercategory');
		}
		
		function CreateUser($username, $role)
		{
			$DefaultPhotoPath = './photos/default.jpg';
			$DefaultPassword = MD5('пета123');
			$query = $this->db->get_where('user', array('UserName' => $username));
			if ($query->num_rows() == 0) 
			{
				$user = new stdClass;
				$user->UserName = $username;
				$user->FirstName = '';
				$user->LastName = '';
				$user->Email = '';
				$user->PhotoPath = $DefaultPhotoPath;
				$user->About = '';
				$user->Password = $DefaultPassword;
				$user->AuthorizationId = $role;
				$user->IsDeleted = 0;
				$this->db->insert('user', $user);
				return $this->db->get_where('user', array('UserName' => $username))->result()[0];
			}
			$user = $query->result()[0];
			if ($user->IsDeleted == 0) 
			{
				return null;
			}
			$user->IsDeleted = 0;
			$this->db->where('Id', $user->Id);
			$this->db->set('IsDeleted', 0);
			$this->db->update('user');
			return $user;
		}
		
		function DeleteUser($id) 
		{
			$this->db->where('Id', $id);
			$this->db->set('IsDeleted', '1');
			$this->db->update('user');
			return true;
		}
		
	}
?>