<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class booknew extends CI_Controller
{
 
        public function __construct()
        {
                parent::__construct();
                // $this->load->database();
                
        }

        public function index()
        {          
            $data['data2'] = $this->QL_Sach->get_all();
            $this->load->view('user/body.php',$data);
              
        }
        
    }