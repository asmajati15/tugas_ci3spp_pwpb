<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    private $_table = "kelas";

    public $nama_kelas;
    public $id_jurusan;

    public function rules()
    {
        return [
            ['field' => 'nama_kelas',
            'label' => 'nama_Kelas',
            'rules' => 'required'],
            
            ['field' => 'id_jurusan',
            'label' => 'id_jurusan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        // return $this->db->order_by("nama_kelas", "asc")->get($this->_table)->result();
        $this->db->select('*');
        $this->db->from('kelas');
        $this->db->join('jurusan','jurusan.id_jurusan = kelas.id_jurusan');        
        $query = $this->db->order_by("nama_kelas", "asc")->get()->result();
        return $query;
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kelas" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id_kelas = md5(uniqid(rand(9999,99999999), true));
        $this->id_kelas = mt_rand();
        $this->nama_kelas = $post["nama_kelas"];
        $this->id_jurusan = $post["id_jurusan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kelas = $post["id_kelas"];
        $this->nama_kelas = $post["nama_kelas"];
        $this->id_jurusan = $post["id_jurusan"];
        return $this->db->update($this->_table, $this, array('id_kelas' => $post['id_kelas']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kelas" => $id));
    }
}