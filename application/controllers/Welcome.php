<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function beranda()
	{
		echo "<h1> Selamat datang untuk belajar </h1>";
	}
}
?>