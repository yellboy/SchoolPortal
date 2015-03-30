<?php 

	class Alumnus_model extends CI_model 
	{
		
		var $alumnus = array();
		
		function __construct()
		{
			parent::__construct();
		}
		
		private function _loadAlumnus() 
		{	
			$alumnus = $this->db->get('alumni');
		}
		
		function getAlumnus() 
		{
			$alumnus = $this->db->get('alumni')->result();
			return $alumnus;
		}
	}
?>