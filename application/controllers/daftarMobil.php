<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftarMobil extends CI_Controller {

    public function index(){
        // $this->load->view('frontEnd/header');
        $this->load->view('daftarMobil/index');
		$this->load->view('frontEnd/footer');
    }
}
?>