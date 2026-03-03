<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Kategori_model extends CI_Model{

    private $table ='kategori';

    //Ambil smeua data
    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }
    public function insert($data)
    {
        return $this->db->insert($this->table,$data);
    }
}