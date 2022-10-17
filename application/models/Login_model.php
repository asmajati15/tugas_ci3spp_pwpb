<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login_model extends CI_Model
{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	public function getAll()
    {
        $this->db->select('*');
        $this->db->from('login');     
        $query = $this->db->get()->result();
        return $query;
    }

    function auth_login($username,$password){
        $query=$this->db->query("SELECT * FROM login WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
}