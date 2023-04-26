<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends MY_controller {
	
	function __construct(){
		parent::__construct();		
    $this->session_status = $this->session->userdata('admin_pension_fund_tracker_isLoggedIn');
		$this->id_user = $this->session->userdata('admin_pension_fund_tracker_data')['id'];
		$this->token = $this->session->userdata('admin_pension_fund_tracker_token');
		
		if (!$this->session_status) {
			$this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
		}	
	}

	public function index()
	{
		$data['title'] = "Export";
    $data['menuLink'] = "export";

		$this->load->view('includes/header', $data);
		$this->load->view('v_export', $data);
		$this->load->view('includes/footer', $data);
  }
}