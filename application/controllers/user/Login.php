<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('QL_ND');
		$this->load->model('Google_login_model');
		// $this->load->library('google');
	}

	public function index()
	{
		// $data = '';
		if ($this->input->post('login')) {

			$dlieu = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$result = $this->QL_ND->checkLogin($dlieu);
			if ($result == true) {
				$tbao = $this->QL_ND->user();
				foreach ($tbao as $row) {
					if ($dlieu['username'] == $row->username && $row->level == 0 && $row->tt == 1) {
						//Lưu tên đăng nhập
						$_SESSION['tb'] = $row->fullname;
						$_SESSION['em'] = $row->email;
						$_SESSION['id'] = $row->id_account;
						echo '<script language="javascript">';
						echo 'alert("Thành công")';
						echo '</script>';
						header('location:http://localhost:8080/hihi/index.php/User/user');
					} else {
						if ($dlieu['username'] == $row->username && $row->level == 1 && $row->tt == 1) {
							//Lưu tên đăng nhập
							$_SESSION['tb'] = $row->fullname;
							$_SESSION['em'] = $row->email;
							$_SESSION['id']	= $row->id_account;
							echo '<script language="javascript">';
							echo 'alert("Thành công")';
							echo '</script>';
							header('location:http://localhost:8080/hihi/index.php/admin/admin');
						}
					}
				}
			} else {
				echo '<script language="javascript">';
				echo 'alert("Thất bại")';
				echo '</script>';
			}
		}
		include_once APPPATH . "libraries/vendor/autoload.php";

		$google_client = new Google_Client();

		//Set the OAuth 2.0 Client ID
		$google_client->setClientId('388859858881-75g60fvo3hsql8h5d68l9kp10fkv9i6g.apps.googleusercontent.com');

		//Set the OAuth 2.0 Client Secret key
		$google_client->setClientSecret('rl1ztGBML0J5t15jw43N4nZJ');

		//Set the OAuth 2.0 Redirect URI
		$google_client->setRedirectUri('http://localhost:8080/hihi/index.php/user/Login/login');

		$google_client->addScope('email');

		$google_client->addScope('profile');
		if (isset($_GET["code"])) {
			$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

			if (!isset($token["error"])) {
				$google_client->setAccessToken($token['access_token']);

				$this->session->set_userdata('access_token', $token['access_token']);

				$google_service = new Google_Service_Oauth2($google_client);

				$data = $google_service->userinfo->get();

				$current_datetime = date('Y-m-d H:i:s');

				if ($this->google_login_model->Is_already_register($data['id'])) {
					//update data
					$user_data = array(
						'fullname' => $data['given_name'],
						'email' => $data['email'],
						'level' => 0,
						'tt' => 1,
					);

					$this->Google_login_model->Update_user_data($user_data, $data['id']);
				} else {
					//insert data
					$user_data = array(
						'login_oauth_uid' => $data['id'],
						'fullname'  => $data['given_name'],
						'email'  => $data['email'],
						'level' => 0,
						'tt' => 1,
					);

					$this->google_login_model->Insert_user_data($user_data);
				}
				$this->session->set_userdata('user_data', $user_data);
			}
		}
		$login_button = '';
		if (!$this->session->userdata('access_token')) {
			// $login_button = '<a href="' . $google_client->createAuthUrl() . '"><i class="fab fa-google-plus-g"> Login with Google+</i></a>';
			$login_button = $google_client->createAuthUrl();
			// <i class="fab fa-google-plus-g"></i></a>
			$data['login_button'] = $login_button;
			$this->load->view('user/login_view2.php', $data);
		}
		else {
			$login_button = $google_client->createAuthUrl();
			// <i class="fab fa-google-plus-g"></i></a>
			$data['login_button'] = $login_button;
			// $data['login_button'] = $login_button;
			$this->load->view('user/login_view2.php', $data);

			// $dlieu = array(
			// 	'login_oauth_uid' => $data['login_oauth_uid'],
			// );
			// $result = $this->QL_ND->checkLogin_gg($dlieu);
			// $tbao = $this->QL_ND->user();
			// foreach ($tbao as $row) {
			// 	if ($dlieu['login_oauth_uid'] == $row->login_oauth_uid && $row->level == 0 && $row->tt == 1) {
			// 		//Lưu tên đăng nhập
			// 		$_SESSION['tb'] = $row->fullname;
			// 		$_SESSION['em'] = $row->email;
			// 		// $_SESSION['id'] = $row->id_account;
			// 		echo '<script language="javascript">';
			// 		echo 'alert("Thành công")';
			// 		echo '</script>';
			// 		header('location:http://localhost:8080/hihi/index.php/User/user');
			// 	}
			// }
		}
	}

	public function login()
	{

		include_once APPPATH . "libraries/vendor/autoload.php";

		$google_client = new Google_Client();

		//Set the OAuth 2.0 Client ID
		$google_client->setClientId('603157886335-7qd4k0r4mmocslr3f8qqrlac0skkspoo.apps.googleusercontent.com');

		//Set the OAuth 2.0 Client Secret key
		$google_client->setClientSecret('aaKGkoufV7mrtXmngcs4LpM6');

		//Set the OAuth 2.0 Redirect URI
		$google_client->setRedirectUri('http://localhost:8080/hihi/index.php/user/Login/login');

		$google_client->addScope('email');

		$google_client->addScope('profile');
		$data['login_oauth_uid'] = '';

		if (isset($_GET["code"])) {
			$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

			if (!isset($token["error"])) {
				$google_client->setAccessToken($token['access_token']);

				$this->session->set_userdata('access_token', $token['access_token']);

				$google_service = new Google_Service_Oauth2($google_client);

				$data = $google_service->userinfo->get();
				$data['login_oauth_uid'] = $data['id'];

				$current_datetime = date('Y-m-d H:i:s');

				if ($this->google_login_model->Is_already_register($data['id'])) {
					//update data
					$user_data = array(
						'fullname' => $data['given_name'],
						'email' => $data['email'],
						'level' => 0,
						'tt' => 1,
					);

					$this->Google_login_model->Update_user_data($user_data, $data['id']);
				} else {
					//insert data
					$user_data = array(
						'login_oauth_uid' => $data['id'],
						'fullname'  => $data['given_name'],
						'email'  => $data['email'],
						'level' => 0,
						'tt' => 1,
					);

					$this->google_login_model->Insert_user_data($user_data);
				}
				$this->session->set_userdata('user_data', $user_data);
			}
		}
		$login_button = '';
		if (!$this->session->userdata('access_token')) {
			$login_button = '<a href="' . $google_client->createAuthUrl() . '">';
			// <i class="fab fa-google-plus-g"></i></a>
			$data['login_button'] = $login_button;
			$this->load->view('user/login_view2.php', $data);
		} else {
			$login_button = $google_client->createAuthUrl();
			// <i class="fab fa-google-plus-g"></i></a>
			$data['login_button'] = $login_button;
			// $data['login_button'] = $login_button;
			$this->load->view('user/login_view2.php', $data);
			// redirect('index.php/User/user');
			// $dlieu = array(
			// 	'login_oauth_uid' => $data['login_oauth_uid'],
			// );
			// $result = $this->QL_ND->checkLogin_gg($dlieu);
			// $tbao = $this->QL_ND->user();
			// foreach ($tbao as $row) {
			// 	if ($dlieu['login_oauth_uid'] == $row->login_oauth_uid && $row->level == 0 && $row->tt == 1) {
			// 		//Lưu tên đăng nhập
			// 		$_SESSION['tb'] = $row->fullname;
			// 		$_SESSION['em'] = $row->email;
			// 		// $_SESSION['id'] = $row->id_account;
			// 		echo '<script language="javascript">';
			// 		echo 'alert("Thành công")';
			// 		echo '</script>';
			// 		header('location:http://localhost:8080/hihi/index.php/User/user');
			// 	}
			// }
		}
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */