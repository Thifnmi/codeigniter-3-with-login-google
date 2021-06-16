<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');

		$this->load->model('Insert_model');
		$this->load->model('Select_SPMB');
		$this->load->model('CT_Hoadon_model');
		$this->load->model('Vc_model');
		
	}

	public function index()
	{
		$this->load->view('admin/login_view2.php');
	}
	function checkLogin()
	{
		$data['data2'] = $this->CT_Hoadon_model->getdata();
		$data['data3'] = $this->Select_SPMB->home();
		$data['data4'] = $this->Select_SPMB->home2();
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$data['vc'] = $this->Vc_model->vanchuyen_sl();
		if ($this ->Admin_model->checkLogin($username,$password)) {
			$this->load->view('admin/Admin_view.php',$data);
		} else {
			echo '<script>' ;
			echo 'alert("sai tai khoan hoac mat khau")' ;
			echo '</script>' ;
			$this->load->view('admin/Login_view2.php');
		}
		
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */