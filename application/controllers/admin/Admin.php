<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
 
        public function __construct()
        {
                parent::__construct();
                $this->load->model('QL_Sach');
                $this->load->model('QL_ND');
        }

        public function index()
        {       
                $data['data'] = $this->QL_ND->dem_ms();
                $data['data1'] = $this->QL_Sach->dem_ms(); 
                $data['data2'] = $this->QL_Sach->get_all();
                $this->load->view('admin/Admin_view.php',$data);
        }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */