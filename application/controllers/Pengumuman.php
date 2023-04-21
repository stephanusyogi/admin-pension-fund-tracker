<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends MY_controller {
	
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
		$data_pengumuman = $this->send_request("pengumuman", $this->token, "GET");

		$data['title'] = "Pengumuman";
    $data['menuLink'] = "pengumuman";
		$data['data_pengumuman'] = $data_pengumuman;

		$this->load->view('includes/header', $data);
		$this->load->view('v_pengumuman', $data);
		$this->load->view('includes/footer', $data);
	}

	public function pengumuman_add(){
		$postData = $this->input->post();
		
		$response = $this->send_request_with_data('pengumuman/add', $this->token, 'POST', $postData);
		
		$this->session->set_flashdata('success', "Tambah Pengumuman Berhasil!");
		redirect(base_url()."pengumuman");
	}
	
	public function pengumuman_delete($id){
		$postData = array(
			'id' => $id
		);
		
		$response = $this->send_request_with_data('pengumuman/delete', $this->token, 'POST', $postData);
		
		$this->session->set_flashdata('success', "Pengumuman Berhasil Dihapus!");
		redirect(base_url()."pengumuman");
	}

	public function pengumuman_update($id){
		$postData = $this->input->post();
		$postData['id'] = $id;

		$response = $this->send_request_with_data('pengumuman/update', $this->token, 'POST', $postData);

		$this->session->set_flashdata('success', "Pengumuman Berhasil Diubah!");
		redirect(base_url()."pengumuman");
	}
}
