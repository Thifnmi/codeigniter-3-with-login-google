<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MuonBook extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

	public function add_data() 
	{	
      	$id_account=$_POST['id_account'];
		$isDate=date("m/d/y");	
		$quanlythuvien=$_POST['quanlythuvien'];
         //Xử lý các phần tử được chọn
      		$query = "insert into tb_muontra (id_muon, id_account, ngaymuon, quanlythuvien,trangthaipm ) values 
									(NULL, '$id_account', '$isDate','$quanlythuvien',0)";
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
	
    

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */