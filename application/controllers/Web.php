<?php
//defined(‘BASEPATH’) or exit (‘no direct script access allowed’);
class Web extends CI_Controller
{
public function __construct()
{
parent::__construct();
$this->load->helper('url');
}

public function index()
{
$data['judul'] = "Halaman Depan";

$this->load->view('view_header',$data);
$this->load->view('view_index',$data);
$this->load->view('view_footer',$data);
}

public function about()
{
$data['judul'] = "Halaman About";
$this->load->view('view_header', $data);
$this->load->view('view_about', $data);
$this->load->view('view_footer', $data);
}

}