<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_controller {
	public function login()
	{
		$this->load->view('v_auth_login');
	}
	
	public function login_verication()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$data = array(
			"username" => $username,
			"password" => $password,
		);

		$response = $this->send_request_with_data_untoken("login-administrator", "POST", $data);

		if ($response["status"]) {
			$nama = explode(" ", $response['data']['name'])[0];
			$this->session->set_userdata('admin_pension_fund_tracker_data', $response["data"]);
			$this->session->set_userdata('admin_pension_fund_tracker_token', $response["access_token"]);
			$this->session->set_userdata('admin_pension_fund_tracker_isLoggedIn', true);

			$this->session->set_flashdata('success', "Login Berhasil. Selamat Datang, {$nama}!");
			redirect(base_url());
		} else {
			$this->session->set_flashdata('error', 'Username/Password Anda Salah!');
			redirect(base_url() . 'login');
		}
		
	}
  
	public function logout()
	{
		$token = $this->session->userdata('admin_pension_fund_tracker_token');
		$this->send_request("logout-administrator", $token, "GET");
		session_destroy();
		redirect(base_url() . 'login');
	}
}
