<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();

	}


	public function search1($keyword){		

		if ($keyword!=null) {
			$this->db->select('*');
			$this->db->where('tensach like','%'. $keyword. '%');
			$query = $this->db->get('tb_book');
			return $query->result_array();

		}
		else{
			$this->db->select('*');			
			$query = $this->db->get('tb_book');
			return $query->result_array();

		}

	}

}