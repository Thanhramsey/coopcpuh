<?php
class Mcosodanhgia extends CI_Model {
        public function __construct()
        {
                parent::__construct();
                $this->table = $this->db->dbprefix('cosodanhgia');
        }


		public function comment_insert($mydata)
        {
                $this->db->insert($this->table,$mydata);
        }

		public function hoidap_all()
        {
                $this->db->order_by('question_time', 'asc');
                $query = $this->db->get($this->table);
                return $query->result_array();
        }
}