<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model
{
    private $_table = "jurusan";

    public $nama_jurusan;

    public function rules()
    {
        return [
            ['field' => 'nama_jurusan',
            'label' => 'nama_jurusan',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->order_by("nama_jurusan", "asc")->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_jurusan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id_jurusan = md5(uniqid(rand(9999,99999999), true));
        $this->id_jurusan = mt_rand();
        $this->nama_jurusan = $post["nama_jurusan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jurusan = $post["id_jurusan"];
        $this->nama_jurusan = $post["nama_jurusan"];
        return $this->db->update($this->_table, $this, array('id_jurusan' => $post['id_jurusan']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_jurusan" => $id));
    }
}