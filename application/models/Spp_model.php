<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Spp_model extends CI_Model
{
    private $_table = "spp";

    public $tahun_ajaran;
    public $nominal;

    public function rules()
    {
        return [
            ['field' => 'tahun_ajaran',
            'label' => 'tahun_Ajaran',
            'rules' => 'required'],
            
            ['field' => 'nominal',
            'label' => 'nominal',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->order_by("tahun_ajaran", "asc")->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_spp" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id_spp = md5(uniqid(rand(9999,99999999), true));
        $this->id_spp = mt_rand();
        $this->tahun_ajaran = $post["tahun_ajaran"];
        $this->nominal = $post["nominal"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_spp = $post["id_spp"];
        $this->tahun_ajaran = $post["tahun_ajaran"];
        $this->nominal = $post["nominal"];
        return $this->db->update($this->_table, $this, array('id_spp' => $post['id_spp']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_spp" => $id));
    }
}