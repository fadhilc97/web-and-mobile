<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function index(){
        $data['nama'] = 'Fadhil';
        $data['judul'] = 'Halaman Siswa';
        
        $result = $this->db->get('siswa')->result();
        $data['result'] = $result;

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

        $this->db->insert('siswa', $data);
        redirect(base_url('siswa'));
    }

    public function info_siswa($id){
        $where['id'] = $id;
        $data['result'] = $this->db->get_where('siswa', $where)->result();
        $data['judul'] = 'Detail siswa';

        $this->load->view('templates/header', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('templates/footer');

    }

    public function ubah_siswa($id){
        $data['judul'] = 'Ubah data siswa';
        $data['id'] = $id;

        $where['id'] = $id;
        $data['result'] = $this->db->get_where('siswa', $where)->result();

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
        $where = [ 'id' => $id ];
        $data = [
            'nama' => $nama,
            'nisn' => $nisn,
            'email' => $email,
            'jurusan' => $jurusan
        ];

        $this->db->update('siswa', $data, $where);
        redirect(base_url('siswa'));


    }

    public function hapus_siswa($id){
        $where = ['id' => $id];
        $this->db->delete('siswa', $where);
        redirect(base_url('siswa'));
    }

}