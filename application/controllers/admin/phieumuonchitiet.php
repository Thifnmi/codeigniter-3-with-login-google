<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class phieumuonchitiet extends CI_Controller
{
	public function __construct()
        {
                parent::__construct();
                $this->load->model('QL_Pm');
        }
	public function phieumuonchitiet($id)
       {
                $data['detail']= $this->QL_Pm->phieumuonchitiet1($id);
            $this->load->view('admin/phieumuonchitiet',$data);

       }


}