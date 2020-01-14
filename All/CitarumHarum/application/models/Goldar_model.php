<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Goldar_model extends CI_Model {

    private $_table = "goldar";

    public $nik;
    public $nama;
    public $tanggal_lahir;
    public $jenis_kelamin;
    public $golongan_darah;
    public $rt;
    public $rw;
    // public $kontak;

    public function rules()
    {
        return [

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required']
        ];
    }

    public function getData()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($nik)
    {
        return $this->db->get_where($this->_table, ["nik" => $nik])->row();
    }

    public function insert()
    {
        $post = $this->input->post();
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->golongan_darah = $post["golongan_darah"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        // $this->kontak = $post["kontak"];
        $this->db->insert($this->_table, $this);
    }

    public function edit()
    {
        $post = $this->input->post();
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->golongan_darah = $post["golongan_darah"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        // $this->kontak = $post["kontak"];
        $this->db->update($this->_table, $this, array('nik' => $post['nik']));
    }

    public function delete($nik)
    {
        return $this->db->delete($this->_table, array("nik" => $nik));
    }
}

/* End of file Goldar_model.php */
/* Location: ./application/models/Goldar_model.php */