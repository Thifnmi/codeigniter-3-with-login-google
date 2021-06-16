<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library(array('form_validation'));
		$this->load->model('register_model'); //Tải model user_model.php

	}
	public function index()
	{


		$this->load->view('user/header');
		$this->load->view('user/register');
		$this->load->view('user/footer');
		// xử lý đăng ký

		if($this->input->post('register')){
			$firstname=$this->input->post('fullname');	
			$password=$this->input->post('password');
			$repassword=$this->input->post('repassword');
			$phone=$this->input->post('phone');
			$email=$this->input->post('email');

			if($password == $repassword)	{
		//Thêm vào database
				$result=$this->register_model->check_email($email);
				if($result==FALSE){
					$userid= $this->register_model->index();
					if($userid==true){				


						 echo '<script language="javascript">';
						echo 'alert("Thành công")';
						echo '</script>';

					}}

					else{
						echo '<script language="javascript">';
						echo 'alert("Thất bại vì đã trùng email")';
						echo '</script>';

					}

					}


					else{
						echo '<script language="javascript">';
						echo 'alert("Sai Password")';
						echo '</script>';

					}

				}
//$this->load->view('pages/register',$data,FALSE);
			}}
			/* End of file Register.php */
			/* Location: ./application/controllers/Register.php */
			/* End of file Register.php */
			/* Location: ./application/controllers/Register.php */
