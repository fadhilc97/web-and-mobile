<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Siswa_model', 'siswa');
    }

    public function index(){
        $data['nama'] = 'Fadhil';
        $data['judul'] = 'Halaman Siswa';
        $keyword = $this->input->post('keyword');

        $data['result'] = $this->siswa->search_data($keyword)->result();
        $data['banyak_siswa'] = $this->siswa->search_data($keyword)->num_rows();

        $this->load->view('templates/header', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_siswa(){
        $nama = $this->input->post('nama');
        $nisn = $this->input->post('nisn');
        $email = $this->input->post('email');
        $jurusan = $this->input->post('jurusan');

        $data = [
            'nama' => $nama,
            'nisn' => $nisn,
            'email' => $email,
            'jurusan' => $jurusan
        ];

        $this->siswa->insert_data($data);
        $this->session->set_flashdata('insert', 'success');
        redirect(base_url('siswa'));
    }

    public function info_siswa($id){
        $data['result'] = $this->siswa->get_data_by_id($id)->result();
        $data['judul'] = 'Detail siswa';

        $this->load->view('templates/header', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('templates/footer');

    }

    public function ubah_siswa($id){
        $data['judul'] = 'Ubah data siswa';
        $data['id'] = $id;
        $data['result'] = $this->siswa->get_data_by_id($id)->result();

        $this->load->view('templates/header', $data);
        $this->load->view('siswa/ubah_siswa', $data);
        $this->load->view('templates/footer');
    }

    public function proses_ubah_siswa(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nisn = $this->input->post('nisn');
        $email = $this->input->post('email');
        $jurusan = $this->input->post('jurusan');
        $data = [
            'nama' => $nama,
            'nisn' => $nisn,
            'email' => $email,
            'jurusan' => $jurusan
        ];

        $this->siswa->update_data($data, $id);
        $this->session->set_flashdata('update', 'success');
        redirect(base_url('siswa'));

    }

    public function hapus_siswa($id){
        $this->siswa->delete_data($id);
        $this->session->set_flashdata('delete', 'success');
        redirect(base_url('siswa'));
    }

}