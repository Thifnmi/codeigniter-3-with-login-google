<?php
class register_model extends CI_Model{
public function __construct(){
parent::__construct();
}
public function index(){
 

	$data= array( 
		'fullname'=>$this->input->post('fullname'),
		'email'=>$this->input->post('email'),
		'phone'=>$this->input->post('phone'),
		'username'=>$this->input->post('username'),				
		'password'=>$this->input->post('password'),	
		'level' => 0,
		'tt'=>0
	);
 

$this->db->insert('tb_account',$data);
$userid=$this->db->insert_id();//Lấy ID vừa insert được chính là user id.
return $userid;

}

public function check_email($email){
	// $email=($this->input->post('email'));
	$condition = "email =" . "'" . $email ."'";
		$this->db->select('*');
		$this->db->from('tb_account');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
		return true;
		} else {
		return false;
		}
		}
 //trả về số dòng của kết quả truy vấn


}
?>

