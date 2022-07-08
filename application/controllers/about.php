<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

    public function index(){
        // $this->load->view('frontEnd/header');
        $this->load->view('about/index');
		$this->load->view('frontEnd/footer');
    }
}
?>