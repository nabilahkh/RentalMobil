<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mobil extends CI_Controller {
    public function index(){
        $this->load->model('Mobil_model','mobil');

        $data['list_mobil']=$this->mobil->getAll();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/index',$data);
        $this->load->view('layout/footer');
    }

	public function edit()
	{
		$_id = $this->input->get('id');
        $this->load->model("mobil_model", "mobil");
        $mobiledit = $this->mobil->findById($_id);

        $data['mobiledit'] = $mobiledit;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('mobil/update', $data);
		$this->load->view('layout/footer');;
	}

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('mobil_model','mobil');
        $data['mobil']=$this->mobil->findById($_id);
        // $data['modelmbl']=$this->mobil;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/view',$data);
        $this->load->view('layout/footer');
        
    }

	public function delete()
	{
		$_id = $this->input->get('id');
        $this->load->model('mobil_model', 'mobil');
        $this->mobil->delete($_id);

        redirect(base_url().'index.php/mobil/', 'refresh');
	}

	public function save()
	{
		$this->load->model("mobil_model", "mobil");

        $_nopol = $this->input->post('nopol');
        $_warna = $this->input->post('warna');
        $_biaya_sewa = $this->input->post('biaya_sewa');
        $_deskripsi = $this->input->post('deskripsi');
        $_cc = $this->input->post('cc');
		$_tahun = $this->input->post('tahun');
		$_merk_id = $this->input->post('merk_id');
		$_foto = $this->input->post('foto');
		$_nama = $this->input->post('nama');
		$_mobiledit = $this->input->post('mobiledit');

        $data_mobil[] = $_nopol;
        $data_mobil[] = $_warna;
        $data_mobil[] = $_biaya_sewa;
        $data_mobil[] = $_deskripsi;
        $data_mobil[] = $_cc;
		$data_mobil[] = $_tahun;
		$data_mobil[] = $_merk_id;
		$data_mobil[] = $_foto;
		$data_mobil[] = $_nama;

        if(isset($_mobiledit)){
            $data_mobil[] = $_mobiledit;
            $this->mobil->update($data_mobil);
        }else{ 
            $this->mobil->save($data_mobil);
        }

        redirect(base_url().'index.php/mobil/', 'refresh');
	}

	public function create()
	{
		$this->load->view('layout/header');
		$this->load->view('mobil/create');
        $this->load->view('layout/sidebar');
		$this->load->view('layout/footer');
	}

	public function upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 1000;
		$config['max_width'] = 3264;
		$config['max_height'] = 2720;

		$_nopol = $this->input->post('nopol');

		$array = explode('.', $_FILES['fotomobil']['name']);
		$ext = end($array);

		$new_name = $_nopol.'.'.$ext;

		$config['file_name'] = $new_name;

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload('fotomobil'))
		{
			$error = array('error' => $this->upload->display_errors());
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
		}

		redirect(base_url().'index.php/mobil');
	}
}
?>