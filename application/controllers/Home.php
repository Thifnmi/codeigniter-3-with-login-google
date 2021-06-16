<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
		$this->load->library("cart");
		$this->load->model('product_model');
	}

	public function index()
	{
		// phần thông tin shop như địa chỉ số điện thoại
		$data['shop'] = $this->contact_model->get_all();
		 // mạng xã hội
		$data['mangxh']= $this->contact_model->mangxh();
		$data['product_all']=json_decode(json_encode($this->product_model->get()),true);
		//JSON là viết tắt của cụm từ “JavaScript Object Notation”, là cách thức để mô tả object trong xử lý của java script.
		//Sử dụng hàm json_encode để convert giá trị chỉ định thành định dạng JSON.
		//	$data['product_3']=json_decode(json_encode($this->product_model->get3()),true);
		$this->load->view('pages/header',$data);
		$this->load->view('pages/index',$data);
		 $this->load->view('pages/footer',$data);
	}


	

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */