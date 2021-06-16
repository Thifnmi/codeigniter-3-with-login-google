<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	session_start(); 
 
		if (isset($_SESSION['tb'])){
		    unset($_SESSION['tb']);
		      unset($_SESSION['em']);
		       unset($_SESSION['id']);		      
		      //unset($_SESSION['id']);
		     // xóa session login
		    // $_SESSION['tb']="User";
		}
		header("Location: http://localhost:8080/hihi/index.php/User/login");

	}

}