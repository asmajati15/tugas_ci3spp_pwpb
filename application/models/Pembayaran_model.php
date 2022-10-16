<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_model extends CI_Model
{
    private $_table = "pembayaran";

    public $id_siswa;
    public $id_petugas;
    public $id_spp;
    public $tanggal_bayar;
    public $jumlah_bayar;

    public function rules()
    {
        return [
            ['field' => 'id_siswa',
            'label' => 'id_Siswa',
            'rules' => 'required'],
            
            ['field' => 'id_petugas',
            'label' => 'id_Petugas',
            'rules' => 'required'],
            
            ['field' => 'id_spp',
            'label' => 'id_Spp',
            'rules' => 'required'],
            
            ['field' => 'tanggal_bayar',
            'label' => 'tanggal_Bayar',
            'rules' => 'required'],
            
            ['field' => 'jumlah_bayar',
            'label' => 'jumlah_Bayar',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('siswa','siswa.id_siswa = pembayaran.id_siswa');        
        $this->db->join('petugas','petugas.id_petugas = pembayaran.id_petugas');        
        $this->db->join('spp','spp.id_spp = pembayaran.id_spp');        
        $query = $this->db->order_by("tanggal_bayar", "asc")->get();
        return $query;
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pembayaran" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pembayaran = mt_rand();
        $this->id_siswa = $post["id_siswa"];
        $this->id_petugas = $post["id_petugas"];
        $this->id_spp = $post["id_spp"];
        $this->tanggal_bayar = $post["tanggal_bayar"];
        $this->jumlah_bayar = $post["jumlah_bayar"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pembayaran = $post["id_pembayaran"];
        $this->id_siswa = $post["id_siswa"];
        $this->id_petugas = $post["id_petugas"];
        $this->id_spp = $post["id_spp"];
        $this->tanggal_bayar = $post["tanggal_bayar"];
        $this->jumlah_bayar = $post["jumlah_bayar"];
        return $this->db->update($this->_table, $this, array('id_pembayaran' => $post['id_pembayaran']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pembayaran" => $id));
    }
}