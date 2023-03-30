<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_controller {
	
	function __construct(){
		parent::__construct();		
    $this->session_status = $this->session->userdata('admin_pension_fund_tracker_isLoggedIn');
		
		if (!$this->session_status) {
			$this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
		}	
	}

	public function index()
	{
		$token = $this->session->userdata('admin_pension_fund_tracker_token');

		$data_user = $this->send_request("user?sort_order=desc&sort_field=created_at&per_page=10", $token, "GET");
		$data['data_user'] = $data_user;
		$data['title'] = "Peserta";
    $data['menuLink'] = "data-peserta";

		$this->load->view('includes/header', $data);
		$this->load->view('v_peserta', $data);
		$this->load->view('includes/footer', $data);
	}
}
