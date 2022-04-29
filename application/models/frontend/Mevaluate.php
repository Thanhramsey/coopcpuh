<?php
class Mevaluate extends CI_Model {
        public function __construct()
        {
                parent::__construct();
                $this->table = $this->db->dbprefix('evaluate');
        }

        public function comment_productid($id)
        {
                $this->db->where('product_id', $id);
                $this->db->order_by('id', 'asc');
                $query = $this->db->get($this->table);
                return $query->result_array();
        }
		public function comment_insert($mydata)
        {
                $this->db->insert($this->table,$mydata);
        }

}