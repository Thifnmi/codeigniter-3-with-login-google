<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sachmuonuser extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();		
	}    
	public function fullname() {
		$st= $_SESSION['id'];
		$this->db->select('fullname');
		$this->db->from('tb_account');
		$this->db->where("id_account ",$st);
		$this->db->limit(1);
		$query = $this->db->get();
		 if ($query->num_rows() == 1) {
			 return $query->row()->fullname;
		 }
		 return false;
	}
	public function phone() {
		$st= $_SESSION['id'];
		$this->db->select('phone');
		$this->db->from('tb_account');
		$this->db->where("id_account ",$st);
		$this->db->limit(1);
		$query = $this->db->get();
		 if ($query->num_rows() == 1) {
			 return $query->row()->phone;
		 }
		 return false;
	}
	public function email() {
		$st= $_SESSION['id'];
		$this->db->select('email');
		$this->db->from('tb_account');
		$this->db->where("id_account ",$st);
		$this->db->limit(1);
		$query = $this->db->get();
		 if ($query->num_rows() == 1) {
			 return $query->row()->email;
		 }
		 return false;
	}
	public function password() {
		$st= $_SESSION['id'];
		$this->db->select('password');
		$this->db->from('tb_account');
		$this->db->where("id_account ",$st);
		$this->db->limit(1);
		$query = $this->db->get();
		 if ($query->num_rows() == 1) {
			 return $query->row()->password;
		 }
		 return false;
	}
	public function up()
{
	    $st= $_SESSION['id'];

		 $u = array(
          	'fullname' => $_POST['fullname'],
      		'phone' =>   $_POST['phone'],		
      		'email' => $_POST['email'], 
			'password' => $this->input->post('password')
      		);
		 $this->db->where('id_account', $st);
		$this->db->update('tb_account', $u);
		  $_SESSION['tb'] =  $_POST['fullname'];
	return true;

}
public function savePass()
{
  $st= $_SESSION['id'];
	 $p = array(
          	'password' => $_POST['pass1']);
	    $this->db->where('id_account', $st);
		$this->db->update('tb_account', $p);

}
    public function sachmuon(){
		$query = "SELECT * from tb_muontra tm inner join tb_chitietmuontra tc on tm.id_muon = tc.id_muon 
		inner join tb_book tb on tc.masach = tb.masach";
        return $this->db->query($query)->result();
	}
	public function xoataikhoan()
	{		
		$query = "delete from tb_account where id_account=".$_SESSION['id'];
		$this->db->query($query);
	}
	
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */