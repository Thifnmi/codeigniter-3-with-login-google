<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("pagination");
		$this->load->model('search_model');		
	}

	public function index(){		
		 $keyword=$this->input->post('search');	

			// tìm kiếm
		$dt['product'] =$this->search_model->search1($keyword);

		$this->load->view('user/header',$dt);

		$this->load->view('user/resultsearch',$dt);
		$this->load->view('user/footer',$dt);



	}


}