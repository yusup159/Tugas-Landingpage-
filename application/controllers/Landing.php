<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
    public function index(){
        $this->load->view('landing/header');
        $this->load->view('landing/content');
        $this->load->view('landing/footer');
    }
}