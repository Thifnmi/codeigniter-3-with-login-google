<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Themmoi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
                $this->load->model('QL_Sach');
                $this->load->model('QL_Ncc');
                $this->load->model('QL_Theloai');
                $this->load->model('QL_Nxb');
                $this->load->library('upload');
	}

	public function index()
	{
                $data['data'] = $this->QL_Ncc->getdata(); 
                $data['data1'] = $this->QL_Theloai->getdata(); 
                $data['data2'] = $this->QL_Nxb->getdata(); 
                $data['data3'] = $this->QL_Sach->getmax(); 

        if ($this->input->post('them')) 
        {
                $config['upload_path'] = './picture/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['img']['name'];
                

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $link = base_url() . "picture/" . $_FILES['img']['name'];
                $this->upload->do_upload('img');
                // $data['data3'] = $this->QL_Sach->getmax(); 
                $max = $this->QL_Sach->getmax()->row()->maxid;

                $this->QL_Sach->add_sach($link,$max);
                echo '<script language="javascript">alert("Đã thêm thành công!");</script>';
                redirect('index.php/admin/themmoi', 'refresh');
        }
		$this->load->view('admin/themmoi.php',$data);
	
        }
}
/* End of file home.php */
/* Location: ./application/controllers/home.php */