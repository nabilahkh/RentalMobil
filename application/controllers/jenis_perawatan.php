<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_perawatan extends CI_Controller {
    public function index()
    {
		$this->load->model('jenis_perawatan_model', 'perawatan');
		$list_perawatan = $this->perawatan->getAll();

		$data['list_perawatan'] = $list_perawatan;

		$this->load->view('layout/header');
		$this->load->view('jenis_perawatan/index', $data);
        $this->load->view('layout/sidebar');
		$this->load->view('layout/footer');
    }

	public function edit()
	{
		$_id = $this->input->get('id');
        $this->load->model("jenis_perawatan_model", "perawatan");
        $perawatanedit = $this->perawatan->findById($_id);

        $data['perawatanedit'] = $perawatanedit;

        $this->load->view('layout/header');
		$this->load->view('jenis_perawatan/update', $data);
        $this->load->view('layout/sidebar');
		$this->load->view('layout/footer');
	}

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('jenis_perawatan_model','perawatan');
        $data['perawatan']=$this->perawatan->findById($_id);
        // $data['modelmhs'] = $this->perawatan;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_perawatan/view',$data);
        $this->load->view('layout/footer');
    }

	public function save()
    {
        $this->load->model("jenis_perawatan_model", "perawatan");

        $_nama = $this->input->post('nama');
		$_perawatanedit = $this->input->post('perawatanedit');

        $data_perawatan[] = $_nama;
   
        if(isset($_perawatanedit)){
            //
            $data_perawatan[] = $_perawatanedit;
            $this->perawatan->update($data_perawatan);
        }else{ 
            $this->perawatan->save($data_perawatan);
        }

        redirect(base_url().'index.php/jenis_perawatan/', 'refresh');
    }

	public function delete()
	{
		$_id = $this->input->get('id');
        $this->load->model('jenis_perawatan_model', 'perawatan');
        $this->perawatan->delete($_id);

        redirect(base_url().'index.php/jenis_perawatan/', 'refresh');
	}

	public function create()
	{
		$this->load->view('layout/header');
		$this->load->view('jenis_perawatan/create');
        $this->load->view('layout/sidebar');
		$this->load->view('layout/footer');
	}
}