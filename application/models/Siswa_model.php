<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    private $_table = "siswa";

    public $nisn;
    public $nis;
    public $nama;
    public $gambar;
    public $id_kelas;
    public $alamat;
    public $no_telepon;
    public $id_spp;

    public function rules()
    {
        return [
            ['field' => 'nisn',
            'label' => 'Nisn',
            'rules' => 'required','numeric'],
            
            ['field' => 'nis',
            'label' => 'Nis',
            'rules' => 'required','numeric'],
            
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],
            
            ['field' => 'id_kelas',
            'label' => 'id_Kelas',
            'rules' => 'required'],
            
            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],
            
            ['field' => 'no_telepon',
            'label' => 'no_Telepon',
            'rules' => 'required', 'numeric'],
            
            ['field' => 'id_spp',
            'label' => 'id_Spp',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        // return $this->db->get($this->_table)->result();
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->join('kelas','kelas.id_kelas = siswa.id_kelas');      
        $this->db->join('spp','spp.id_spp = siswa.id_spp');      
        $query = $this->db->get();
        return $query;
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_siswa" => $id])->row();
    }

    public function saveWithoutImage()
    {
        $post = $this->input->post();
        // $this->id_siswa = md5(uniqid());
        $this->id_siswa = mt_rand();
        $this->nisn = $post["nisn"];
        $this->nis = $post["nis"];
        $this->nama = $post["nama"];
        $this->id_kelas = $post["id_kelas"];
        $this->alamat = $post["alamat"];
        $this->no_telepon = $post["no_telepon"];
        $this->id_spp = $post["id_spp"];
        return $this->db->insert($this->_table, $this);
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id_siswa = md5(uniqid());
        $this->id_siswa = mt_rand();
        $this->nisn = $post["nisn"];
        $this->nis = $post["nis"];
        $this->nama = $post["nama"];
        $this->id_kelas = $post["id_kelas"];
        $this->alamat = $post["alamat"];
        $this->no_telepon = $post["no_telepon"];
        $this->id_spp = $post["id_spp"];
        $this->upload->data()["file_name"] = $post["gambar"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_siswa = $post["id_siswa"];
        $this->nisn = $post["nisn"];
        $this->nis = $post["nis"];
        $this->nama = $post["nama"];
        $this->id_kelas = $post["id_kelas"];
        $this->alamat = $post["alamat"];
        $this->no_telepon = $post["no_telepon"];
        $this->id_spp = $post["id_spp"];
        return $this->db->update($this->_table, $this, array('id_siswa' => $post['id_siswa']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_siswa" => $id));
    }
}