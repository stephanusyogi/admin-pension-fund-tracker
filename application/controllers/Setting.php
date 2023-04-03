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

	public function ppip_add()
	{
		$data['title'] = "Setting Portofolio PPIP";
    $data['menuLink'] = "setting-portofolio-ppip";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_ppip_add', $data);
		$this->load->view('includes/footer', $data);
	}
	
	public function ppip_edit($id)
	{
		if (!$id) {
			$this->session->set_flashdata('error', 'Investasi Tidak Ditemukan!');
			return redirect(base_url() . 'setting-portofolio-ppip');
		}	
		$data['title'] = "Setting Portofolio PPIP";
    $data['menuLink'] = "setting-portofolio-ppip";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_ppip_edit', $data);
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

	public function nilai_asumsi_add()
	{
		$data['title'] = "Setting Nilai Asumsi";
    $data['menuLink'] = "setting-nilai-asumsi";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_nilai_asumsi_add', $data);
		$this->load->view('includes/footer', $data);
	}
	
	public function nilai_asumsi_edit($id)
	{
		if (!$id) {
			$this->session->set_flashdata('error', 'Investasi Tidak Ditemukan!');
			return redirect(base_url() . 'setting-nilai-asumsi');
		}	
		$data['title'] = "Setting Nilai Asumsi";
    $data['menuLink'] = "setting-nilai-asumsi";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_nilai_asumsi_edit', $data);
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
	
	public function personal_pasar_keuangan_add()
	{
		$data['title'] = "Setting Portofolio Pasar Keuangan";
    $data['menuLink'] = "setting-portofolio-personal-pasar-keuangan";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_personal_pasar_keuangan_add', $data);
		$this->load->view('includes/footer', $data);
	}
	
	public function personal_pasar_keuangan_edit($id)
	{
		if (!$id) {
			$this->session->set_flashdata('error', 'Investasi Tidak Ditemukan!');
			return redirect(base_url() . 'setting-portofolio-personal-pasar-keuangan');
		}	
		$data['title'] = "Setting Portofolio Pasar Keuangan";
    $data['menuLink'] = "setting-portofolio-personal-pasar-keuangan";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_personal_pasar_keuangan_edit', $data);
		$this->load->view('includes/footer', $data);
	}
	

	public function lifecycle()
	{
		$data['title'] = "Setting Komposisi Investasi Lifecycle Fund";
    $data['menuLink'] = "setting-komposisi-investasi-lifecycle-fund";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_lifecycle', $data);
		$this->load->view('includes/footer', $data);
	}

	public function lifecycle_add()
	{
		$data['title'] = "Setting Komposisi Investasi Lifecycle Fund";
    $data['menuLink'] = "setting-komposisi-investasi-lifecycle-fund";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_lifecycle_add', $data);
		$this->load->view('includes/footer', $data);
	}
	
	public function lifecycle_edit($id)
	{
		if (!$id) {
			$this->session->set_flashdata('error', 'Investasi Tidak Ditemukan!');
			return redirect(base_url() . 'setting-komposisi-investasi-lifecycle-fund');
		}	
		$data['title'] = "Setting Komposisi Investasi Lifecycle Fund";
    $data['menuLink'] = "setting-komposisi-investasi-lifecycle-fund";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_lifecycle_edit', $data);
		$this->load->view('includes/footer', $data);
	}
}
