<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function index(){
        $data = [];
        // $this->load->view('frontEnd/header');
        $this->load->view('login',$data);
		$this->load->view('frontEnd/footer');

    }

    public function otentikasi(){
        $this->load->model("user_model","users");
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $row = $this->users->login($_username, $_password);
        if(isset($row)){ //jika user terdaftar di database
            $this->session->set_userdata('USERNAME', $row->username);
            $this->session->set_userdata('ROLE', $row->role);
            $this->session->set_userdata('USER', $row);

            redirect(base_url().'index.php/sewa');
        }else{//jika user tidak terdaftar (uname pass salah)
            redirect(base_url().'index.php/login?status=f');
        }
    }

    public function logout(){
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USERS');

        redirect(base_url().'index.php/dashboard');
    }
}
?>