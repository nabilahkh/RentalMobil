<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sewa extends CI_Controller {

	public function index()
	{
		$this->load->model('sewa_model', 'mobil');
		$list_mobil = $this->mobil->getAll();

		$data['list_mobil'] = $list_mobil;

		$this->load->view('sewa/index', $data);
		$this->load->view('frontend/footer');
	}

	public function save()
	{
		$this->load->model('sewa_model', 'order');

		$_tanggal_mulai = $this->input->post('tanggal_mulai');
		$_tanggal_akhir = $this->input->post('tanggal_akhir');
		$_tujuan = $this->input->post('tujuan');
		$_noktp = $this->input->post('noktp');
		$_users_id = $this->input->post('users_id');
		$_mobil_id = $this->input->post('mobil_id');

		$data_order[]= $_tanggal_mulai;
		$data_order[]= $_tanggal_akhir;
		$data_order[]= $_tujuan;
		$data_order[]= $_noktp;
		$data_order[]= $_users_id;
		$data_order[]= $_mobil_id;

		$this->order->saveOrder($data_order);

		redirect(base_url().'index.php/sewa');
		
		
	}
}

?>