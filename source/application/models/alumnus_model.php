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
		
		function Dodaj($i, $fn, $ln, $city, $state, $email, $year, $grade)
		{
			$obj = new stdClass();
			//$obj ->ID = $i;
			$obj -> firstName = $fn;
			$obj -> lastName = $ln;
			$obj -> city = $city;
			$obj -> state = $state;
			$obj -> email = $email;
			$obj -> year = $year;
			$obj -> classroom = $grade;
		
			$this->db->insert('alumni', (array) $obj);
			return $this->db->insert_id();
		}
		
		function Obrisi($id)
		{
			$obj = new stdClass();
			$obj -> ID = $id;
			$this->db->delete('alumni', (array) $obj); 
		}
	}
?>