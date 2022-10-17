<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        } else {
            $this->load->model("kelas_model");
            $this->load->model("jurusan_model");
            $this->load->library('form_validation');
        }
    }

    public function index()
    {
        $data["kelass"] = $this->kelas_model->getAll();
        $this->load->view("admin/kelas/list", $data);
    }

    public function add()
    {
        $data["jurusans"] = $this->jurusan_model->getAll();
        $kelas = $this->kelas_model;
        $validation = $this->form_validation;
        $validation->set_rules($kelas->rules());

        if ($validation->run()) {
            $kelas->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/kelas/new_form", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('kelas');
       
        $data2["jurusans"] = $this->jurusan_model->getAll();
        $kelas = $this->kelas_model;
        $validation = $this->form_validation;
        $validation->set_rules($kelas->rules());

        if ($validation->run()) {
            $kelas->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kelas"] = $kelas->getById($id);
        if (!$data["kelas"]) show_404();
        
        $this->load->view("admin/kelas/edit_form", array_merge($data, $data2));
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->kelas_model->delete($id)) {
            redirect(site_url('kelas'));
        }
    }

    public function pdf()
    {
        $data["kelass"] = $this->kelas_model->getAll();
    
        $this->load->library('pdf');
    
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-kelas.pdf";
        $this->pdf->load_view('admin/kelas/laporan_pdf', $data);

    }
}