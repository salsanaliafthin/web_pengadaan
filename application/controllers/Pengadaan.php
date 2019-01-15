<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengadaan extends CI_Controller {


	public function index()
	{

		$this->load->view('pengadaan/pengadaan');
	}

    public function tambah()
	{
		{
			$this->load->view('pengadaan/tambah');
		}
	}

}
