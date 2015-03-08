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

        function loadCategories()
        {
            $result = array();
            $this->load->model('Category_model');

            $query = $this->db->get('category');
            foreach ($query->result() as $row)
            {
                $this->Category_model->Title = $row->Title;
                //
                return $row->Title;
            }
        }

    }
?>

