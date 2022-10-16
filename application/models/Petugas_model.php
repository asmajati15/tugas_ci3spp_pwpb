<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model
{
    private $_table = "petugas";

    public $username;
    public $password;
    public $nama_petugas;
    public $gambar;
    public $level;

    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required','numeric'],
            
            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required','numeric'],
            
            ['field' => 'nama_petugas',
            'label' => 'Nama_petugas',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        // return $this->db->get($this->_table)->result();
        $this->db->select('*');
        $this->db->from('petugas');     
        $query = $this->db->get()->result();
        return $query;
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_petugas" => $id])->row();
    }

    public function saveWithoutImage()
    {
        $post = $this->input->post();
        $this->id_petugas = mt_rand();
        $this->username = $post["username"];
        $this->password = md5($post["password"]);
        $this->nama_petugas = $post["nama_petugas"];
        return $this->db->insert($this->_table, $this);
    }

    public function save()
    {
        $data = array(
            "id_petugas" => mt_rand(),
            "username" => $this->input->post('username'),
            "password" => md5($this->input->post('password')),
            "nama_petugas" => $this->input->post('nama_petugas'),
            // "gambar" => $this->$uploaded_data['file_name'],
            "gambar" => $this->upload->data()["file_name"]
        );

        $this->db->set($data);
		$this->db->insert($this->_table);

		// return $this->db->insert($this->_table,[
		// ]);
    }

    public function updateWithoutImage()
    {
        $post = $this->input->post();
        $this->id_petugas = $post["id_petugas"];
        $this->username = $post["username"];
        $this->password = md5($post["password"]);
        $this->nama_petugas = $post["nama_petugas"];
        $this->gambar = $post["old"];
        return $this->db->update($this->_table, $this, array('id_petugas' => $post['id_petugas']));
    }

    /*
    public function update()
    {
        $data = array(
            "id_petugas" => mt_rand(),
            "username" => $this->input->post('username'),
            "password" => $this->input->post('password'),
            "nama_petugas" => $this->input->post('nama_petugas'),
            // "gambar" => $this->$uploaded_data['file_name'],
            "gambar" => $this->upload->data()["file_name"]
        );
        
        $this->db->set($data);
		$this->db->update($this->_table, $this, array('id_petugas' => $data['id_petugas']));

        // $post = $this->input->post();
        // $this->id_petugas = $post["id_petugas"];
        // $this->username = $post["username"];
        // $this->password = $post["password"];
        // $this->nama_petugas = $post["nama_petugas"];
        // return $this->db->update($this->_table, $this, array('id_petugas' => $post['id_petugas'])); 
    }
    */

    public function delete($id)
    {
        unlink('uploads/'.$id->gambar);
        return $this->db->delete($this->_table, array("id_petugas" => $id));
    }
}