<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
		$this->load->model('login_model');
	}

	public function index()
	{

        
        // $data['tb'] =  $this->login_model->user();
        $data['mangxh']= $this->contact_model->mangxh();
        $data['shop'] = $this->contact_model->get_all();
		$this->load->view('pages/header',$data);
		$this->load->view('pages/contact',$data);
		$this->load->view('pages/footer',$data);
	}
	
}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */