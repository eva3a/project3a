<?php
class Datacoba extends CI_Controller{

    public function index()
    {

        $this->load->model('ModelBuku');
        $data['buku']=$this->ModelBuku->get_data();

        $this->load->view('view_buku', $data);
    }
}
?>