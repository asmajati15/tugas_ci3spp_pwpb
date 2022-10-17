<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') == "login") {
            $this->load->model("siswa_model");
            $this->load->model("kelas_model");
            $this->load->model("spp_model");
            $this->load->library('form_validation');
        } if ($this->session->userdata('status') == "siswa") {
            $this->load->model("siswa_model");
            $this->load->model("kelas_model");
            $this->load->model("spp_model");
            $this->load->library('form_validation');
        } else {
            redirect(base_url("login"));
        }
    }

    public function index()
    {
        // $data["siswas"] = $this->siswa_model->getAll();
        $data["siswas"] = $this->siswa_model->getAll();
        $this->load->view("admin/siswa/list", $data);
    }

    public function add()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 1024;

        $this->load->library('upload', $config);

        $data["kelass"] = $this->kelas_model->getAll();
        $data2["spps"] = $this->spp_model->getAll();
        $siswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run()) {
            if (!$this->upload->do_upload('gambar')) {
                $siswa->saveWithoutImage();
                $this->session->set_flashdata('success', 'Data berhasil disimpan !');
            } else {
                $siswa->save();
                $this->session->set_flashdata('success', 'Data berhasil disimpan !');
            }
        }
        
        // $this->session->set_flashdata('error', 'Data gagal disimpan !');
        $this->load->view("admin/siswa/new_form", array_merge($data, $data2));
    }

    public function edit($id)
    {
        $siswa = $this->siswa_model;
        $data["siswa"] = $siswa->getById($id);
        $data2["kelass"] = $this->kelas_model->getAll();
        $data3["spps"] = $this->spp_model->getAll();
        if (!$data["siswa"]) show_404();
        $this->load->view("admin/siswa/edit_form", array_merge($data, $data2, $data3));
    }
    
    public function update($id)
    {
        $this->siswa_model->updateWithoutImage($id);
        $this->session->set_flashdata('success', 'Data berhasil di update !');
        return redirect(site_url('siswa'));
    }

    /*
    public function edit($id = null)
    {
        if (!isset($id)) redirect('siswa');

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        // $config['max_size']             = 100;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 1024;

        $this->load->library('upload', $config);
       
        $data2["kelass"] = $this->kelas_model->getAll();
        $data3["spps"] = $this->spp_model->getAll();
        $siswa = $this->siswa_model;
        $validation = $this->form_validation;
        $validation->set_rules($siswa->rules());

        if ($validation->run()) {
            if (!$this->upload->do_upload('gambar')) {
                $siswa->updateWithoutImage();
                $this->session->set_flashdata('success', 'Data berhasil disimpan !');
            // } else {
            //     $siswa->update();
            //     $this->session->set_flashdata('success', 'Data berhasil disimpan !');
            }
        }

        $data["siswa"] = $siswa->getById($id);
        if (!$data["siswa"]) show_404();
        
        $this->load->view("admin/siswa/edit_form", array_merge($data, $data2, $data3));
    }
    */

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->siswa_model->delete($id)) {
            redirect(site_url('siswa'));
        }
    }

    public function pdf()
    {
        $data["siswas"] = $this->siswa_model->getAll();
    
        $this->load->library('pdf');
    
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-siswa.pdf";
        $this->pdf->load_view('admin/siswa/laporan_pdf', $data);

    }
}