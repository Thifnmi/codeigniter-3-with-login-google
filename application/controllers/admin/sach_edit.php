<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sach_edit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('QL_Ncc');
        $this->load->model('QL_Theloai');
        $this->load->model('QL_Nxb');
        $this->load->model('QL_Sach');
	}

	public function index($id)
	{ 
                if ($this->input->post('update')) {
                        $this->QL_Sach->update();
                        echo '<script language="javascript">alert("Đã update thành công!");</script>';
                        redirect('index.php/admin/Cs_Sach', 'refresh');
                }        
        $data['data'] = $this->QL_Ncc->getdata(); 
        $data['data1'] = $this->QL_Theloai->getdata(); 
        $data['data2'] = $this->QL_Nxb->getdata(); 
        $data['data3'] = $this->QL_Sach->get_all2($id); 
        return $this->load->view('admin/sach_edit.php',$data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */