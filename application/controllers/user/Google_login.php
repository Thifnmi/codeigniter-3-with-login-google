<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Google_login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Google_login_model');
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
        $google_client->setRedirectUri('http://localhost:8080/hihi/index.php/User/Google_login/login');

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

                if ($this->Google_login_model->Is_already_register($data['id'])) {
                    //update data
                    $user_data = array(
                        'fullname' => $data['given_name'],
                        'email' => $data['email'],
                    );

                    $this->Google_login_model->Update_user_data($user_data, $data['id']);
                } else {
                    //insert data
                    $user_data = array(
                        'login_oauth_uid' => $data['id'],
                        'fullname'  => $data['given_name'],
                        'email'  => $data['email'],
                    );

                    $this->Google_login_model->Insert_user_data($user_data);
                }
                $this->session->set_userdata('user_data', $user_data);
            }
        }
        $login_button = '';
        if (!$this->session->userdata('access_token')) {
            $login_button = '<a target="new" href="' . $google_client->createAuthUrl() . '"><img src="' . base_url() . 'public/asset/sign-in-with-google.png" /></a>';
            $data['login_button'] = $login_button;
            $this->load->view('user/google_login', $data);
        } else {
            $this->load->view('user/google_login');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('access_token');

        $this->session->unset_userdata('user_data');

        redirect('index.php/user/google_login/login');
    }
}
