<?php
class Matakuliah extends CI_Controller
{

    public function __construct()
    {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->helper('url');
    }

    public function index()
{
    $this->load->view('View_form_matkul');
}

public function cetak()
{
    $this->form_validation->set_rules('kode', 'Kode Matakuliah','required|min_length[3]|max_length[4]', [
    'required' => 'Kode Matakuliah Harus diisi',
    'min_lenght' => 'Kode terlalu pendek'
    ]);

    $this->form_validation->set_rules('nama', 'Nama Matakuliah',
    'required|min_length[3]', [
    'required' => 'Nama Matakuliah Harus diisi',
    'min_lenght' => 'Nama terlalu pendek'
    ]);
        if ($this->form_validation->run() != true) {
        $this->load->view('view_form_matkul');
        } else {
            $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
            ];
        $this->load->view('view_data_matkul', $data);
        }
}
}