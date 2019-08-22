<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index(){
        $data['nama'] = 'Fadhil';
        $data['judul'] = 'Halaman About';
        $data['umur'] = 2019 - 1997;
        $data['pekerjaan'] = 'Programmer, Maker and Mentor';

        $this->load->view('templates/header', $data);
        $this->load->view('about/index', $data);
        $this->load->view('templates/footer');
    }

}