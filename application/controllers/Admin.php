<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_controller {
	
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
		$data['title'] = "Admin";
    $data['menuLink'] = "admin";

		$this->load->view('includes/header', $data);
		$this->load->view('v_admin', $data);
		$this->load->view('includes/footer', $data);
	}
}
