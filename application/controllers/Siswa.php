<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("siswa_model");
        $this->load->model("kelas_model");
        $this->load->model("spp_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $data["siswas"] = $this->siswa_model->getAll();
        $data["siswas"] = $this->siswa_model->getAll()->result();
        $this->load->view("admin/siswa/list", $data);
    }

    public function add()
    {
        $data["kelass"] = $this->kelas_model->getAll();
        $data2["spps"] = $this->spp_model->getAll();
        $siswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run()) {
            $siswa->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/siswa/new_form", array_merge($data, $data2));
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('siswa');
       
        $data2["kelass"] = $this->kelas_model->getAll();
        $siswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run()) {
            $siswa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["siswa"] = $siswa->getById($id);
        if (!$data["siswa"]) show_404();
        
        $this->load->view("admin/siswa/edit_form", array_merge($data, $data2));
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->siswa_model->delete($id)) {
            redirect(site_url('siswa'));
        }
    }
}