<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
    public function index()
    {
		$this->load->model('kelola_user_model', 'users');
		$list_user = $this->users->getAll();

		$data['list_user'] = $list_user;

		$this->load->view('layout/header');
		$this->load->view('user/index', $data);
        $this->load->view('layout/sidebar');
		$this->load->view('layout/footer');
    }

	public function edit()
	{
		$_id = $this->input->get('id');
        $this->load->model("kelola_user_model", "users");
        $useredit = $this->users->findById($_id);

        $data['useredit'] = $useredit;

        $this->load->view('layout/header');
		$this->load->view('user/update', $data);
        $this->load->view('layout/sidebar');
		$this->load->view('layout/footer');
	}

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('kelola_user_model','users');
        $data['users']=$this->users->findById($_id);
        // $data['modelmhs'] = $this->perawatan;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('user/view',$data);
        $this->load->view('layout/footer');
    }

	public function save()
    {
        $this->load->model("kelola_user_model", "user");

        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');
		$_useredit = $this->input->post('useredit');

        $data_user[] = $_username;
        $data_user[] = $_password;
        $data_user[] = $_email;
        $data_user[] = $_status;
        $data_user[] = $_role;

        if(isset($_useredit)){
            // update data lama
            $data_user[] = $_useredit;
            $this->user->update($data_user);
        }else{  //save data baru
            $this->mahasiswa->save($data_user);
        }

        redirect(base_url().'index.php/user/', 'refresh');
    }

	public function delete()
	{
		$_id = $this->input->get('id');
        $this->load->model('kelola_user_model', 'user');
        $this->user->delete($_id);

        redirect(base_url().'index.php/user/', 'refresh');
	}
}