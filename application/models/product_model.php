 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class product_model extends CI_Model{
	const TABLE_NAME='sanpham';
	const FIR_INDEX='id';
public function get($where = Null){
	$this->db->select('*'); 
	$this->db->from(self::TABLE_NAME);
	if($where !== NULL){
		if(is_array($where)){
			foreach ($where as  $field => $value) {$this->db->where($field,$value);}
		}
		else{
			$this->db->where(seft::PRI_INDEX,$where);
		}
	}
	$result =$this->db->get()->result();
	if($result){
		if($where !==NULL){
			return array_shift($result);}// loại bỏ phần tử đầu tiên của mảng và trả về mảng mới
			else
			{
				return $result;
			}
		}
		else {
			return false;
		}
		
	}
	public function isset(Array $data){
	if($this->db->insert(self::TABLE_NAME,$data)){
		return $this->db->insert_id();}
		else{
			return false;
		}
	}
	//yến 29/12/2020
	// public function getlisthinhanh($masanpham){
	// 	$condition = "masanpham =" . "'" . $masanpham['masanpham'] . "'";
	// 	$this->db->select('*');
	// 	$this->db->from('list_hinhanh');
	// 	$this->db->where($condition);


	// }
// public function validate() {
		
// 		$this->db->select('*');
// 		$this->db->from('sanpham');
// 		}
public function update(Array $data,$where =array())
{
	if(!is_array($where)){
		$where = array(self::PRI_INDEX=>$where);
	}
	$this->db->update(self::TABLE_NAME, $data,$where);
	return $this->db->affected_row();
}
public function delete($where = array()){
	if(!is_array()){
		$where = array(self::PRI_INDEX=>$where);
	}
	$this->db->delete(self::TA
		,$where);
	return $this->db->affected_row();
}
	 

public function getanh($masanpham){

			$this->db->select('*');
			$this->db->where('masanpham', $masanpham);
			
			$query = $this->db->get('list_hinhanh');
			return $query->result_array();
	}


}
