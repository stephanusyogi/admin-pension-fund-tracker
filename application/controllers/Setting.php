<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends MY_controller {
	
	function __construct(){
		parent::__construct();		
    $this->session_status = $this->session->userdata('admin_pension_fund_tracker_isLoggedIn');
		
		if (!$this->session_status) {
			$this->session->set_flashdata('error', 'Your Session Has Expired!');
			return redirect(base_url() . 'login');
		}	
	}

	public function ppip()
	{
		$data['title'] = "Setting Portofolio PPIP";
    $data['menuLink'] = "setting-portofolio-ppip";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_ppip', $data);
		$this->load->view('includes/footer', $data);
	}

	public function nilai_asumsi()
	{
		$data['title'] = "Setting Nilai Asumsi";
    $data['menuLink'] = "setting-nilai-asumsi";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_nilai_asumsi', $data);
		$this->load->view('includes/footer', $data);
	}

	public function personal_pasar_keuangan()
	{
		$data['title'] = "Setting Portofolio Pasar Keuangan";
    $data['menuLink'] = "setting-portofolio-personal-pasar-keuangan";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_personal_pasar_keuangan', $data);
		$this->load->view('includes/footer', $data);
	}
}
