<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        } else {
            $this->load->model("petugas_model");
            $this->load->library('form_validation');
        }
    }

    public function index()
    {
        // $data["petugass"] = $this->petugas_model->getAll();
        $data["petugass"] = $this->petugas_model->getAll();
        $this->load->view("admin/petugas/list", $data);
    }

    public function add()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 1024;

        $this->load->library('upload', $config);

        $petugas = $this->petugas_model;
        $validation = $this->form_validation;
        $validation->set_rules($petugas->rules());

        if ($validation->run()) {
            if (!$this->upload->do_upload('gambar')) {
                $petugas->saveWithoutImage();
                $this->session->set_flashdata('success', 'Data berhasil disimpan !');
            } else {
                $petugas->save();
                $this->session->set_flashdata('success', 'Data berhasil disimpan !');
            }
        }
        
        // $this->session->set_flashdata('error', 'Data gagal disimpan !');
        $this->load->view("admin/petugas/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('petugas');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 1024;

        $this->load->library('upload', $config);
       
        $petugas = $this->petugas_model;
        $validation = $this->form_validation;
        $validation->set_rules($petugas->rules());

        if ($validation->run()) {
            if (!$this->upload->do_upload('gambar')) {
                $petugas->updateWithoutImage();
                $this->session->set_flashdata('success', 'Data berhasil disimpan !');
            // } else {
            //     $petugas->update();
            //     $this->session->set_flashdata('success', 'Data berhasil disimpan !');
            }
        }

        $data["petugas"] = $petugas->getById($id);
        if (!$data["petugas"]) show_404();
        
        $this->load->view("admin/petugas/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->petugas_model->delete($id)) {
            redirect(site_url('petugas'));
        }
    }
}