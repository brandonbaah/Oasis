<?php

class Sale_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }

        public function get_last_ten_entries()
    {
            $query = $this->db->get('sales', 10);
            return $query->result();
    }
}