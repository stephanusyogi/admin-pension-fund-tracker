<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends MY_controller {
	
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

	public function ppip()
	{
		$data = $this->send_request("setting-ppip/admin", $this->token, "GET");
		
		$data['opsi'] = $data['opsi'];
		$data['title'] = "Setting Portofolio PPIP";
    $data['menuLink'] = "setting-portofolio-ppip";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_ppip', $data);
		$this->load->view('includes/footer', $data);
	}
	
	public function ppip_by_id($id)
	{
		$data = $this->send_request("setting-ppip/admin?id=".$id, $this->token, "GET")['data'][0];
		echo json_encode($data, true);
	}

	public function ppip_add()
	{
		$data['title'] = "Setting Portofolio PPIP";
    $data['menuLink'] = "setting-portofolio-ppip";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_ppip_add', $data);
		$this->load->view('includes/footer', $data);
	}

	public function ppip_add_action()
	{
		$postData = $this->input->post();
		
		$response = $this->send_request_with_data('setting-ppip/admin/add', $this->token, 'POST', $postData);
		
		$this->session->set_flashdata('success', "Nilai Berhasil Ditambahkan!");
		redirect(base_url()."setting-portofolio-ppip");
	}

	public function ppip_hitung_nilai(){
		$res = $this->send_request("setting-ppip/admin/hitung-nilai", $this->token, "POST");
		
		$this->session->set_flashdata('success', "Nilai Berhasil Dihitung!");
		redirect(base_url()."setting-portofolio-ppip");
	}
	
	public function ppip_edit($id)
	{
		$postData = $this->input->post();
		$postData['id'] = $id;
		
		$response = $this->send_request_with_data('setting-ppip/admin/update', $this->token, 'POST', $postData);
		
		$this->session->set_flashdata('success', "Nilai Berhasil Diperbarui!");
		redirect(base_url()."setting-portofolio-ppip");
	}

	public function nilai_asumsi()
	{
		$data = $this->send_request("setting-nilai-asumsi/admin", $this->token, "GET");
		
		$data['data'] = $data['data'][0];
		$data['title'] = "Setting Nilai Asumsi";
    $data['menuLink'] = "setting-nilai-asumsi";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_nilai_asumsi', $data);
		$this->load->view('includes/footer', $data);
	}
	
	public function nilai_asumsi_add_action($id)
	{
		$postData = $this->input->post();
		
		$data = array(
			'id' => $id,
			'kenaikan_gaji' => $postData['kenaikan_gaji'],
			'kenaikan_phdp' => $postData['kenaikan_phdp'],
			'iuran_ppip' => $postData['iuran_ppip'],
			'dasar_pembayaran_iuran_personal' => $postData['dasar_pembayaran_iuran_personal'],
			'inflasi_jangka_panjang' => $postData['inflasi_jangka_panjang'],
		);
		
		$response = $this->send_request_with_data('setting-nilai-asumsi/admin/update', $this->token, 'POST', $data);
		
		$this->session->set_flashdata('success', "Nilai Berhasil Diperbarui!");
		redirect(base_url()."setting-nilai-asumsi");
	}

	public function personal_pasar_keuangan()
	{
		$data_aset = $this->send_request("setting-personal-lifecycle/admin/buka-tutup-aset", $this->token, "POST")['data'];
		$status_aset = array();
		foreach ($data_aset as $key) {
			$aset = strtolower($key['jenis_aset']);
			$aset = str_replace(" ", "_", $aset);

			$status_aset[$aset] = $key['dibuka'];
		}

		$data = $this->send_request("setting-personal-lifecycle/admin", $this->token, "GET");
		
		$data['opsi'] = $data['opsi'];
		$data['data_aset'] = $data_aset;
		$data['status_aset'] = $status_aset;
		$data['title'] = "Setting Portofolio Pasar Keuangan";
    $data['menuLink'] = "setting-portofolio-personal-pasar-keuangan";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_personal_pasar_keuangan', $data);
		$this->load->view('includes/footer', $data);
	}

	public function personal_pasar_keuangan_by_id($id)
	{
		$data = $this->send_request("setting-personal-lifecycle/admin?id=".$id, $this->token, "GET")['data'][0];
		echo json_encode($data, true);
	}
	
	public function personal_pasar_keuangan_add()
	{
		$data_aset = $this->send_request("setting-personal-lifecycle/admin/buka-tutup-aset", $this->token, "POST")['data'];
		$status_aset = array();
		foreach ($data_aset as $key) {
			$aset = strtolower($key['jenis_aset']);
			$aset = str_replace(" ", "_", $aset);

			$status_aset[$aset] = $key['dibuka'];
		}
		
		$data['data_aset'] = $data_aset;
		$data['status_aset'] = $status_aset;
		$data['title'] = "Setting Portofolio Pasar Keuangan";
    $data['menuLink'] = "setting-portofolio-personal-pasar-keuangan";

		$this->load->view('includes/header', $data);
		$this->load->view('v_setting_personal_pasar_keuangan_add', $data);
		$this->load->view('includes/footer', $data);
	}

	public function personal_pasar_keuangan_add_action()
	{
		$postData = $this->input->post();
		
		$response = $this->send_request_with_data('setting-personal-lifecycle/admin/add', $this->token, 'POST', $postData);
		
		$this->session->set_flashdata('success', "Setting Berhasil Ditambahkan!");
		redirect(base_url()."setting-portofolio-personal-pasar-keuangan");
	}
	
	public function personal_pasar_keuangan_edit($id)
	{
		$postData = $this->input->post();
		$postData['id'] = $id;
		
		$response = $this->send_request_with_data('setting-personal-lifecycle/admin/update', $this->token, 'POST', $postData);
		
		$this->session->set_flashdata('success', "Nilai Berhasil Diperbarui!");
		redirect(base_url()."setting-portofolio-personal-pasar-keuangan");
	}
	
	public function personal_pasar_keuangan_hitung_nilai(){
		$res = $this->send_request("setting-personal-lifecycle/admin/hitung-nilai", $this->token, "POST");
		
		$this->session->set_flashdata('success', "Nilai Berhasil Dihitung!");
		redirect(base_url()."setting-portofolio-personal-pasar-keuangan");
	}

	public function bukatutup_aset(){
		$postData = $this->input->post();
		foreach ($postData as $key => $value) {
			$data = array(
				"dibuka" => (int)$value
			);
			$this->send_request_with_data('setting-personal-lifecycle/admin/buka-tutup-aset?id='.$key, $this->token, 'POST', $data);
		}
		
		$this->session->set_flashdata('success', "Setting Aset Diperbarui!");
		redirect(base_url()."setting-portofolio-personal-pasar-keuangan");
	}

}
