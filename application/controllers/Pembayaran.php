<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        } else {
            $this->load->model("pembayaran_model");
            $this->load->model("siswa_model");
            $this->load->model("petugas_model");
            $this->load->model("spp_model");
            $this->load->library('form_validation');
        }
    }

    public function index()
    {
        $data["pembayarans"] = $this->pembayaran_model->getAll()->result();
        $this->load->view("admin/pembayaran/list", $data);
    }

    public function add()
    {
        $data["siswas"] = $this->siswa_model->getAll();
        $data2["petugass"] = $this->petugas_model->getAll();
        $data3["spps"] = $this->spp_model->getAll();
        $pembayaran = $this->pembayaran_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembayaran->rules());

        if ($validation->run()) {
            $pembayaran->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/pembayaran/new_form", array_merge($data, $data2, $data3));
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('pembayaran');
       
        $data2["siswas"] = $this->siswa_model->getAll();
        $data3["petugass"] = $this->petugas_model->getAll();
        $data4["spps"] = $this->spp_model->getAll();
        $pembayaran = $this->pembayaran_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembayaran->rules());

        if ($validation->run()) {
            $pembayaran->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pembayaran"] = $pembayaran->getById($id);
        if (!$data["pembayaran"]) show_404();
        
        $this->load->view("admin/pembayaran/edit_form", array_merge($data, $data2, $data3, $data4));
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pembayaran_model->delete($id)) {
            redirect(site_url('pembayaran'));
        }
    }

    public function pdf()
    {
        $data["pembayarans"] = $this->pembayaran_model->getAll()->result();
    
        $this->load->library('pdf');
    
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-pembayaran.pdf";
        $this->pdf->load_view('admin/pembayaran/laporan_pdf', $data);

    }
}