<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class qlyuser extends CI_Controller {


	public function __construct()
        {
                parent::__construct();
                $this ->load ->model('QL_ND');
        }

        public function index()
        {       

                if ($this->input->get('id_account1')) {
                        $id_account_lay = $this->input->get('id_account1');
                        $this->QL_ND->dele($id_account_lay);
                        echo '<script language="javascript">alert("Đã xóa thành công!");</script>';
                        redirect('index.php/admin/qlyuser', 'refresh');
                }

                if ($this->input->get('id_account')) {
                        $id_account_lay = $this->input->get('id_account');
                        $this->QL_ND->dele($id_account_lay);
                        echo '<script language="javascript">alert("Đã xóa thành công!");</script>';
                        redirect('index.php/admin/qlyuser', 'refresh');
                }

                if ($this->input->post('xac_nhan')) {
                        $this->QL_ND->update();
                        echo '<script language="javascript">alert("Đã xac nhan thành công!");</script>';
                        redirect('index.php/admin/qlyuser', 'refresh');
                }

                $data['data4'] = $this->QL_ND->get_all2();
                $data['data5'] = $this->QL_ND->get_all();
                $this->load->helper('url');           
            return $this->load->view('admin/qlyuser.php', $data);
        }
    
    

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */