<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller
{
 
        public function __construct()
        {
                parent::__construct();
                // $this->load->database();
                $this->load->model('QL_Sach');               
                $this->load->model('QL_ND');
                $this->load->model('MuonBook');
                $this->load->model('Sachmuonuser');
                
        }

        public function index()
        {          
            $this->load->view('user/header');                     
            $data['book'] = $this->QL_Sach->get_all_ds();
            $data['countbk'] = $this->QL_Sach->dem_ms_ds();
            $data['loai'] = $this->QL_Sach->get_loai();
            $this->load->view('user/body',$data);
             $this->load->view('user/footer'); 
        }
       public function chitietLoai($id)
       {
           $data['detail']= $this->QL_Sach->detailBook($id);
           $this->load->view('user/chitietLoai', $data);
       }
       public function muonsach()       
       {
        $data['dt'] = $this->QL_Sach->get_all();   
		

		if ($this->input->post('them')) {
            $this->MuonBook->add_data();
            $max = $this->MuonBook->getmax1()->row()->maxid;
            $this->MuonBook->add_datachitiet($max);
            echo '<script language="javascript">alert("Đã thêm thành công!");</script>';          
            // redirect('index.php/User/user/muonsach', 'refresh');
    	}

    	$this->load->view('user/muonsach.php', $data);        
	}
           
       public function my_account()
       {
           $this->load->model('Sachmuonuser');
           $dt['book'] = $this->Sachmuonuser->sachmuon();
           $dt['fullname'] = $this->Sachmuonuser->fullname();
           $dt['phone'] = $this->Sachmuonuser->phone();
           $dt['email'] = $this->Sachmuonuser->email();
           $dt['password'] = $this->Sachmuonuser->password();
           $this->load->view('user/header.php', $dt);
            $this->load->view('user/my_account.php', $dt);
            $this->load->view('user/footer.php', $dt);
            if ($this->input->post('xoataikhoan')) {     
                if($dt == null){
                    $this->Sachmuonuser->xoataikhoan();
                echo '<script language="javascript">';
                           echo 'alert("Xóa tài khoản thành công")';
                           echo '</script>';
               header('location:http://localhost:8080/hihi/index.php/User/user');
                }   
                else{
                    echo '<script language="javascript">';
                           echo 'alert("Không thể xóa tài khoản")';
                           echo '</script>';
                           
                }    
                
            }
            if ( $this->input->post('upda') ){
                $this->Sachmuonuser->up();  
                header('location:http://localhost:8080/hihi/index.php/User/user/my_account');
              
            }
            if ( $this->input->post('save')) {
                $pass1=$_POST['pass1'];
                $pass2=$_POST['pass2'];
    
                if ($pass1==$pass2) {
                    $this->Sachmuonuser->savePass();
                    header('location:http://localhost:8080/hihi/index.php/User/user/my_account');
                }
                else
                {
                    echo "Không cập nhật được";
                }
    
            }
       }
       
    }