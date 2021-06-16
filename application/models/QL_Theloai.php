<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QL_Theloai extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

        public function getdata() 
	{
        $query = $this->db->query("select * from tb_theloai ");
        return $query->result();
        }
	
    

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */