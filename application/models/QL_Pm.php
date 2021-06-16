<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QL_Pm extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

    public function add_data() 
	{	
      	$id_account=$_POST['id_account'];
		$isDate=date("m/d/Y");
		// $ngaymuon=$_POST['ngaymuon'];
		$ngaytra=$_POST['ngaytra'];
		$quanlythuvien=$_POST['quanlythuvien'];
         //Xử lý các phần tử được chọn
      		$query = "insert into tb_muontra (id_muon, id_account, ngaymuon, ngaytra, quanlythuvien,trangthaipm ) values 
									(NULL, '$id_account', '$isDate','$ngaytra','$quanlythuvien',1)";
				$this->db->query($query);
			

       	
			
    }
    public function phieumuonchitiet1($id)
	{	
		$query = $this->db->query("SELECT * FROM tb_chitietmuontra INNER JOIN tb_muontra ON tb_chitietmuontra.id_muon=tb_muontra.id_muon INNER JOIN tb_book ON tb_chitietmuontra.masach=tb_book.masach where tb_chitietmuontra.id_muon=".$id);
        return $query->result();
	}   
    public function add_datachitiet($max) 
	{	$maxid=$max;
        $var=NULL;
 		if (isset($_POST['masach'])) {
      	foreach($_POST['masach'] as $value){
		
			

         //Xử lý các phần tử được chọn
      		$query = "insert into tb_chitietmuontra (id_chitiet, id_muon, masach ) values 
									(NULL, '$maxid', '$value')";
			$this->db->query($query);}
			

       	
			}}
    public function getmax1()
	{
		$query = "SELECT max(id_muon) as maxid
		FROM tb_muontra";
		return $this->db->query($query);
	}

	
			
    

    public function getdata() 
	{
        $query = $this->db->query("
		select * 
		from tb_muontra
		left join tb_account on tb_muontra.id_account = tb_account.id_account
		");
        return $query->result();
    }

	public function getdata1() 
	{
        $query = $this->db->query("
		select * 
		from tb_muontra
		left join tb_account on tb_muontra.id_account = tb_account.id_account
		where trangthaipm=1
		");
        return $query->result();
    }

	
	public function getdata2() 
	{
        $query = $this->db->query("
		select * 
		from tb_muontra
		left join tb_account on tb_muontra.id_account = tb_account.id_account
		where trangthaipm =0
		");
        return $query->result();
    }

	function update()
	{
		$id_muon=$_POST['id_muon2'];
		$nguoitao=$_POST['nguoitao'];
		$ngaymuon=date("m/d/Y");

		$query = "update tb_muontra set trangthaipm=1, quanlythuvien='$nguoitao', ngaymuon='$ngaymuon' where id_muon= '$id_muon'";
		$this->db->query($query);
	}
	
	public function update1()
	{
		
		$id_muon=$_POST['id_muon'];
		$ngaytra1=date("m/d/Y");
		$query = "update tb_muontra set ngaytra='$ngaytra1' where id_muon= '$id_muon'";
		$this->db->query($query);
	}


    public function del($id_muon_lay) 
	{
		$query = "delete from tb_chitietmuontra where id_muon ='$id_muon_lay'" ;
		$this->db->query($query);
    }
	 public function dele($id_muon_lay1) 
	{
		$query = "delete from tb_muontra where id_muon ='$id_muon_lay1'" ;
		$this->db->query($query);
    }
    

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */