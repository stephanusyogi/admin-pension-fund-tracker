<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_controller {
	
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
		$data_admin = $this->send_request("admin", $this->token, "GET");

		$data['title'] = "Admin";
    $data['menuLink'] = "admin";
		$data['data_admin'] = $data_admin;

		$this->load->view('includes/header', $data);
		$this->load->view('v_admin', $data);
		$this->load->view('includes/footer', $data);
	}

	public function tambah_admin(){
		$postData = $this->input->post();
		$data = array(
			'name' => $postData['name'],
			'username' => $postData['username'],
			'nip' => $postData['nip'],
			'password' => $postData['password'],
		);
		
		$response = $this->send_request_with_data('admin', $this->token, 'POST', $data);
		
		$this->session->set_flashdata('success', "Tambah Admin Berhasil!");
		redirect(base_url()."admin");
	}
	
	public function hapus_admin($id){
		$response = $this->send_request('admin/'.$id, $this->token, 'DELETE');
		
		$this->session->set_flashdata('success', "Admin Berhasil Dihapus!");
		redirect(base_url()."admin");
	}

	public function ubah_password($id){
		$postData = $this->input->post();
		$postData['id_admin'] = $id;
		$response = $this->send_request_with_data('admin/change-password', $this->token, 'POST', $postData);
		$this->session->set_flashdata('success', "Password Berhasil Diubah!");
		redirect(base_url()."admin");
	}
}
