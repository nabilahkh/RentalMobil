<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perawatan extends CI_Controller {
    public function index()
    {
		$this->load->model('perawatan_model', 'rawatmobil');
		$list_rawatmobil = $this->rawatmobil->getAll();

		$data['list_rawatmobil'] = $list_rawatmobil;

		$this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('perawatan/index', $data);
		$this->load->view('layout/footer');
    }

	public function edit()
	{
		$_id = $this->input->get('id');
        $this->load->model("perawatan_model", "perawatan_mobil");
        $perawatanmobiledit = $this->perawatan_mobil->findById($_id);

        $data['perawatanmobiledit'] = $perawatanmobiledit;
        $this->load->view('layout/header');
        $this->load->view('perawatan/update', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('layout/footer');
	}

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('perawatan_model','perawatan_mobil');
        $data['perawatan_mobil']=$this->perawatan_mobil->findById($_id);
        // $data['modelmhs'] = $this->perawatan;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perawatan/view',$data);
        $this->load->view('layout/footer');
    }

	public function save()
    {
        $this->load->model("perawatan_model", "perawatan_mobil");

        $_tanggal = $this->input->post('tanggal');
        $_biaya = $this->input->post('biaya');
		$_km_mobil = $this->input->post('km_mobil');
		$_deskripsi = $this->input->post('deskripsi');
		$_mobil_id = $this->input->post('mobil_id');
		$_jenis_perawatan_id = $this->input->post('jenis_perawatan_id');
		$perawatanmobiledit = $this->input->post('perawatanmobiledit');

        $data_perawatan_mobil[] = $_tanggal;
        $data_perawatan_mobil[] = $_biaya;
		$data_perawatan_mobil[] = $_km_mobil;
		$data_perawatan_mobil[] = $_deskripsi;
		$data_perawatan_mobil[] = $_mobil_id;
		$data_perawatan_mobil[] = $_jenis_perawatan_id;
   

        if(isset($perawatanmobiledit)){
            // 
            $data_perawatan_mobil[] = $perawatanmobiledit;
            $this->perawatan_mobil->update($data_perawatan_mobil);
        }else{ 
            $this->perawatan_mobil->save($data_perawatan_mobil);
        }

        redirect(base_url().'index.php/perawatan/', 'refresh');
    }

	public function delete()
	{
		$_id = $this->input->get('id');
        $this->load->model('perawatan_model', 'rawatmobil');
        $this->rawatmobil->delete($_id);

        redirect(base_url().'index.php/perawatan/', 'refresh');
	}

	public function create()
	{
		$this->load->view('layout/header');
		$this->load->view('perawatan/create');
        $this->load->view('layout/sidebar');
		$this->load->view('layout/footer');
	}
}