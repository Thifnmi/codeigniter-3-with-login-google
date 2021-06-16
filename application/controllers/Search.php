<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("pagination");
		$this->load->model('search_model');
		$this->load->model('contact_model');
		$this->load->model('product_model');
	}

	public function index()
	{
		
		 $keyword=$this->input->post('search');
		
		// phần thông tin shop như địa chỉ số điện thoại
		$dt['shop'] = $this->contact_model->get_all();
			// mạng xã hội
		$dt['mangxh']= $this->contact_model->mangxh();
			// tìm kiếm
		$dt['product'] =$this->search_model->search1($keyword);



		$this->load->view('pages/header',$dt);

		$this->load->view('pages/ketqua_search',$dt);
		$this->load->view('pages/footer',$dt);

		
		
	}


}

/* End of file Search.php */
/* Location: ./application/controllers/Search.php */