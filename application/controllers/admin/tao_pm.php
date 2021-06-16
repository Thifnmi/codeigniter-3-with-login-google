<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tao_pm extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('QL_Sach');
		$this->load->model('QL_ND');
		$this->load->model('QL_Pm');
		$this->load->model('QL_muontra_wait');
	}

	public function index()
	{
        $data['dt'] = $this->QL_Sach->get_all();
        $data['dt2'] = $this->QL_ND->get_all();
        $data['dt3'] = $this->QL_ND->getadmin();
        // $data['dt4'] = $this->QL_muontra_wait->getdata();
        $data['dt4'] = $this->QL_Pm->getdata2();
        $data['data5'] = $this->QL_Pm->getdata1();
		
		if ($this->input->get('id_muon')) {
            $id_muon_lay = $this->input->get('id_muon');
            $this->QL_Pm->del($id_muon_lay);
            $id_muon_lay1=$this->input->get('id_muon');
             $this->QL_Pm->dele($id_muon_lay1);
			echo '<script language="javascript">alert("Đã xóa thành công!");</script>';
            redirect('index.php/admin/tao_pm', 'refresh');
    	}
    	

		if ($this->input->post('them')) {
            $this->QL_Pm->add_data();
            $max = $this->QL_Pm->getmax1()->row()->maxid;
            $this->QL_Pm->add_datachitiet($max);
            echo '<script language="javascript">alert("Đã thêm thành công!");</script>';
            redirect('index.php/admin/tao_pm', 'refresh');
    	}

		// if ($this->input->get('id_muon2')) {
		// 	$id_muon = $this->input->get('id_muon2');
		// 	$this->QL_muontra_wait->dele($id_muon);
		// 	echo '<script language="javascript">alert("Đã xóa thành công!");</script>';
		// 	redirect('index.php/admin/tao_pm', 'refresh');
		// }

		if ($this->input->post('xac_nhan')) {
			$this->QL_Pm->update();
			echo '<script language="javascript">alert("Đã xác nhận thành công!");</script>';
			redirect('index.php/admin/tao_pm', 'refresh');
		}
		if ($this->input->post('cap_nhat')) {
			$this->QL_Pm->update1();
			echo '<script language="javascript">alert("Đã cập nhật thành công!");</script>';
			redirect('index.php/admin/tao_pm', 'refresh');
		}

    	$this->load->view('admin/tao_pm.php',$data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */