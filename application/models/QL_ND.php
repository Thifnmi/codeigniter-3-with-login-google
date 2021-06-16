<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QL_ND extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

    public function getdata() 
	{
        $query = $this->db->query("select * from tb_account where level = 0 ");
        return $query->result();
    }

    public function getadmin() 
	{
        $query = $this->db->query("select * from tb_account where level = 1 ");
        return $query->result();
    }

    function dem_ms()
    {
        $query = "SELECT COUNT(id_account) as dem from tb_account";
        return $this->db->query($query)->result();
	}

    public function get_all() 
	{
        $query = $this->db->query("select * from tb_account where tt =1");
        return $query->result();
    }

    public function get_all2() 
	{
        $query = $this->db->query("select * from tb_account where tt =0");
        return $query->result();
    }
	
	  public function muontra(){
		$query = "SELECT * 
					from tb_muontra as m right join tb_account as a on m.id_account = a.id_account
							left join tb_book b on m.masach = b.masach
					where level = 0";
        return $this->db->query($query)->result();
	}

	public function addmember() 
	{
        $fullname=$_POST['fullname'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];

		$query = "insert into tb_account (	id_account, fullname, phone, email, username, password, level, tt) values 
									(NULL, '$fullname', '$phone', '$email','$username','$password', '0','1')";
		$this->db->query($query);
    }

    public function update() 
	{
		$id_account=$_POST['id_account'];

		$query = "update tb_account set tt=1  where id_account='$id_account'";
		$this->db->query($query);
    }

	public function checkLogin($dl)
    {
        $condition = "username =" . "'" . $dl['username'] . "' AND " . "password =" . "" . $dl['password'] ;
        $this->db->select('*');
        $this->db->from('tb_account');
        $this->db->where($condition);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
        return true;
        } else {
        return false;
        }
    }
    public function checkLogin_gg($dl)
    {
        $condition = "login_oauth_uid =" . "" . $dl['login_oauth_uid'];
        $this->db->select('*');
        $this->db->from('tb_account');
        $this->db->where($condition);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
        return true;
        } else {
        return false;
        }
    }

    function dele($id_account_lay)
	{
		$query = "delete from tb_account where id_account='$id_account_lay'";
		$this->db->query($query);
	}
	
	public function user() {
        $query = $this->db->query('SELECT * FROM tb_account');
        return $query->result();
     }

   
    

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */