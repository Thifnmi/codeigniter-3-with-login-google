<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QL_Sach extends CI_Model {
	// làm lại check box tạo pm, thay id= ten, admin tạo pm theo login, đăng ký, admin xác  nhận  

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function get_all_ds() {		
		$query = $this->db->query("select * from tb_book where tinhtrang ="."'Mới'");
        return $query->result();
    }
	public function dem_ms_ds()
    {
		$query = $this->db->query("SELECT tensach, count(b.masach) as ss 
		FROM tb_book t LEFT JOIN tb_chitietmuontra b on t.masach = b.masach 
		GROUP BY tensach ORDER BY ss DESC LIMIT 3");
        return $query->result();        
    }
	public function get_loai() {
        $query = $this->db->query("select * from tb_theloai");
        return $query->result();
  }
	public function detailbook($id)
	{
		$query = $this->db->query("select * from tb_book where id_loai =".$id);
        return $query->result();
	}   
	
	
	
     
    public function get_all() {
        $query = $this->db->query("
		SELECT *
	FROM tb_book
	INNER JOIN tb_theloai
	ON   tb_theloai.id_loai = tb_book.id_loai
    INNER JOIN  tb_ncc
    ON tb_book.id_ncc= tb_ncc.id_ncc
    INNER JOIN  tb_nxb
    ON tb_book.id_nxb= tb_nxb.id_nxb");
        return $query->result();
      }

	  public function get_all2($id) {
        $query = $this->db->query("
		SELECT *
	FROM tb_book
	INNER JOIN tb_theloai
	ON   tb_theloai.id_loai = tb_book.id_loai
    INNER JOIN  tb_ncc
    ON tb_book.id_ncc= tb_ncc.id_ncc
    INNER JOIN  tb_nxb
    ON tb_book.id_nxb= tb_nxb.id_nxb
	where tb_book.id_book='$id'");
        return $query->result();
      }

    function dem_ms()
    {
  
        $query = "SELECT COUNT(id_book) as dem from tb_book";
        return $this->db->query($query)->result();
    }
	
	function getdata2($searchlastname)
	{
		if ($searchlastname == null) {
			$query = "select * from tb_book";
			return $this->db->query($query)->result();
		} else if ($searchlastname != null) {
			$query = "select * from tb_book where masach like '%$searchlastname%'";
			return $this->db->query($query)->result();
		}
	}

	
	function dele($id_book_lay)
	{
		$query = "delete from tb_book where id_book='$id_book_lay'";
		$this->db->query($query);
	}

	function update()
	{
		$id_book=$_POST['id_book'];
		$tensach=$_POST['tensach'];
		$id_ncc=$_POST['id_ncc'];
		$loaisach=$_POST['loaisach'];    
		$id_nxb=$_POST['id_nxb'];
		$tinhtrang=$_POST['tinhtrang'];      
		$sl_tong=$_POST['sl_tong'];  
		$sl_conlai=$_POST['sl_conlai'];

		$query = "update tb_book set id_book='$id_book', tensach='$tensach', id_ncc='$id_ncc', id_loai='$loaisach', id_nxb='$id_nxb' , tinhtrang='$tinhtrang', sl_tong='$sl_tong', sl_conlai='$sl_conlai' where id_book= '$id_book'";
		$this->db->query($query);
	}

	function getmax()
	{
		$query = "SELECT max(id_book) as maxid
		FROM tb_book";
		return $this->db->query($query);
		// $this->db->select_max('id_book').;
	}

	
    function add_sach($link,$max)
	{


		$tensach=$_POST['tensach'];
		$id_ncc=$_POST['id_ncc'];
		$id_loai=$_POST['id_loai'];
		$id_nxb=$_POST['id_nxb'];
		$tinhtrang=$_POST['tinhtrang'];
		$sl_tong=$_POST['sl_tong'];
		$masach=$id_loai."_".$max;

		$query = "insert into tb_book (id_book, masach, tensach, id_ncc, id_nxb, id_loai , tinhtrang, sl_tong, sl_conlai , imgb) values 
									(NULL, '$masach', '$tensach', '$id_ncc','$id_nxb','$id_loai', '$tinhtrang','$sl_tong','$sl_tong','$link')";
		$this->db->query($query);
	}

	

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */