<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sachmuon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load -> model('QL_Sach');
	}

	public function index()
	{
        $data['dt'] = $this->QL_Sach->get_all();
        $this->load->helper('url');                
        return $this->load->view('admin/sachmuon.php', $data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */