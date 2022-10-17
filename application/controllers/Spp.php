<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Spp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        } else {
            $this->load->model("spp_model");
            $this->load->library('form_validation');
        }
    }

    public function index()
    {
        $data["spps"] = $this->spp_model->getAll();
        $this->load->view("admin/spp/list", $data);
    }

    public function add()
    {
        $spp = $this->spp_model;
        $validation = $this->form_validation;
        $validation->set_rules($spp->rules());

        if ($validation->run()) {
            $spp->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/spp/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('spp');
       
        $spp = $this->spp_model;
        $validation = $this->form_validation;
        $validation->set_rules($spp->rules());

        if ($validation->run()) {
            $spp->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["spp"] = $spp->getById($id);
        if (!$data["spp"]) show_404();
        
        $this->load->view("admin/spp/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->spp_model->delete($id)) {
            redirect(site_url('spp'));
        }
    }

    public function pdf()
    {
        $data["spps"] = $this->spp_model->getAll();
    
        $this->load->library('pdf');
    
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-spp.pdf";
        $this->pdf->load_view('admin/spp/laporan_pdf', $data);
    }
}