<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserProfileController extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Users_model');
	}
	
	// See how to call this method without copy-paste.
	private function _checkLogin(){
		if($this->session->userdata('logged_in'))
		{
			return true;
		}
		redirect('login', 'refresh');
		return false;
	}
	
	public function index($id)
	{
		$data['shownUser'] = $this::loadUser($id);
		$allCourses = $this::loadCourses();
		$teachingIds = $this::getTeachingIds($id);
		$teaching = array();
		$other = array();
		foreach ($allCourses as $course) 
		{
			if (in_array('' . $course->Id, $teachingIds)) 
			{
				array_push($teaching, $course);
				}
			else 
			{
				array_push($other, $course);
			}
		}
		$data['teaching'] = $teaching;
		$data['other'] = $other;
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['id'] = $session_data['id'];
		$this->load->view('layouts/userProfileLayout', $data);
	}
	
	private function loadUser($id)
	{
		$user = $this->Users_model->getUserById($id);
		$user->Photo = $this->getUserPhoto($id);
		return $user;
	}
	
	private function getTeachingIds($id)
	{
		$this->load->model('Categories_model');
		$result = $this->Categories_model->GetUserCategoryRelations($id);
		$teachingIds = array();
		foreach ($result as $r)
		{
			array_push($teachingIds, $r->CategoryId);
		}
		return $teachingIds;
	}
	
	private function loadCourses()
	{
		$this->load->model('Categories_model');
		return $this->Categories_model->LoadCourses();
	}
	
	private function getUserPhoto($id)
	{
		return $this->Users_model->getUserPhoto($id);
	}
	
	public function SaveUserData()
	{
		if ($this->_checkLogin())
		{
			$user = new stdClass;
			$user->Id = $this->input->post('id');
			$user->UserName = $this->input->post('userName');
			$user->FirstName = $this->input->post('firstName');
			$user->LastName = $this->input->post('lastName');
			$user->Email = $this->input->post('email');
			$user->About = $this->input->post('about');
			$this->Users_model->SaveUser($user);
			echo true;
		}
		return false;
	}
	
	public function ChangePassword() 
	{
		if ($this->_checkLogin())
		{
			$id = $this->input->post('id');
			$oldPassword = $this->input->post('oldPassword');
			$newPassword = $this->input->post('newPassword');
			if ($this->Users_model->CheckPassword($id, $oldPassword))
			{
				$this->Users_model->SavePassword($id, $newPassword);
				echo true;
			}
		}
		echo false;
	}
	
	// Ajax post
	public function ChangePhoto()
	{
		if ($this->_checkLogin())
		{
			$id = $this->input->post('id');
			$photo = $this->input->post('photo');
			$this->Users_model->SavePhoto($id, $photo);
			echo true;
		}
		echo false;
	}
	
	public function AddCourseToUser() 
	{
		if ($this->_checkLogin())
		{
			$courseId = $this->input->post('courseId');
			$userId = $this->input->post('userId');
			$this->Users_model->AddCourseToUser($userId, $courseId);
			echo true;
		}
		echo false;
	}
	
	public function RemoveCourseFromUser()
	{
		if ($this->_checkLogin())
		{
			$courseId = $this->input->post('courseId');
			$userId = $this->input->post('userId');
			$this->Users_model->RemoveCourseFromUser($userId, $courseId);
			echo true;
		}
		echo false;
	}
}