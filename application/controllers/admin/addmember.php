<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addmember extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('QL_ND');
	}

	public function index()
	{
        if ($this->input->post('them')) {
            $this->QL_ND->addmember();
            echo '<script language="javascript">alert("Đã thêm thành công!");</script>';
            redirect('index.php/admin/addmember', 'refresh');
    }
        $this->load->view('admin/addmember.php');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */