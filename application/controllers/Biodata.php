<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

    public function index()
    {
        $this->load->view('formbiodata');
    }

    public function tampil()
    {

        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'tlp' => $this->input->post('tlp'),
            'pkr' => $this->input->post('pkr'),
            'email' => $this->input->post('email'),
            'tgl_lahir' => $this->input->post('tgl_lahir')
        );
        
        // Tampilkan view untuk menampilkan data biodata yang telah diisi
        $this->load->view('tampilan-biodata', $data);
    }
}