<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

    public function get_all_data(){
        return $this->db->get('siswa');
    }

    public function get_data_by_id($id){
        $where['id'] = $id;
        return $this->db->get_where('siswa', $where);
    }

    public function search_data($keyword){
        $this->db->like('nama', $keyword);
        return $this->db->get('siswa');
    }

    public function insert_data($data){
        return $this->db->insert('siswa', $data);
    }

    public function update_data($data, $id){
        $where['id'] = $id;
        return $this->db->update('siswa', $data, $where);
    }

    public function delete_data($id){
        $where['id'] = $id;
        return $this->db->delete('siswa', $where);
    }



}