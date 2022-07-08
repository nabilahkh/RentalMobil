<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class merk extends CI_Controller {
    public function index()
    {
		$this->load->model('merk_model', 'merk');
		$list_merk = $this->merk->getAll();

		$data['list_merk'] = $list_merk;

		$this->load->view('layout/header');
		$this->load->view('merk/index', $data);
        $this->load->view('layout/sidebar');
		$this->load->view('layout/footer');
    }

	public function edit()
	{
		$_id = $this->input->get('id');
        $this->load->model("merk_model", "merk");
        $merkedit = $this->merk->findById($_id);

        $data['merkedit'] = $merkedit;

        $this->load->view('layout/header');
		$this->load->view('merk/update', $data);
        $this->load->view('layout/sidebar');
		$this->load->view('layout/footer');
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('merk_model','merk');
        $data['merk']=$this->merk->findById($_id);
        // $data['modelmhs'] = $this->perawatan;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('merk/view',$data);
        $this->load->view('layout/footer');
    }

	public function save()
    {
        $this->load->model("merk_model", "merk");

        $_nama = $this->input->post('nama');
        $_produk = $this->input->post('produk');
		$_merkedit = $this->input->post('merkedit');

        $data_merk[] = $_nama;
        $data_merk[] = $_produk;
   

        if(isset($_merkedit)){
            // update data lama
            $data_merk[] = $_merkedit;
            $this->merk->update($data_merk);
        }else{  //save data baru
            $this->merk->save($data_merk);
        }

        redirect(base_url().'index.php/merk/', 'refresh');
    }

	public function delete()
	{
		$_id = $this->input->get('id');
        $this->load->model('merk_model', 'merk');
        $this->merk->delete($_id);

        redirect(base_url().'index.php/merk/', 'refresh');
	}

	public function create()
	{
		$this->load->view('layout/header');
		$this->load->view('merk/create');
        $this->load->view('layout/sidebar');
		$this->load->view('layout/footer');
	}
}