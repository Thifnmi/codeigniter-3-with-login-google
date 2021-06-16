<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QL_muontra_wait extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

    public function getdata() 
	{
        $query = $this->db->query("
		select * 
		from tb_wait_muontra
		left join tb_account on tb_wait_muontra.id_account = tb_account.id_account");
        return $query->result();
    }

    
    function dele($id_muon2)
	{
		$query = "delete from tb_wait_muontra where id_muon='$id_muon2'";
		$this->db->query($query);
	}

    
    function dele2()
	{
        $id_muon2=$_POST['id_muon2'];
		$query = "delete from tb_wait_muontra where id_muon='$id_muon2'";
		$this->db->query($query);
	}
    


}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */