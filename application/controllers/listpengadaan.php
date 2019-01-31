<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listpengadaan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		//gae memindah halaman jika belum login
		if ($this->session->userdata('logged_in') == null) {
			redirect('Login');
		}
	}
	public function index()
	{
		#getdata kontrak
		$query = $this->db->get('kontrak');
		$kontrak = $query->result();

		#senddata toview
		$data['kontrak'] = $kontrak;
		$this->load->view('listpengadaan',$data);
	}

	public function detail($id)
	{
		#getdata kontrak
		$this->db->where('id',$id);
		$query = $this->db->get('kontrak');
		$kontrak = $query->row(0);

		#getdata kontrak_sub
		$this->db->where('fk_kontrak',$id);
		$query = $this->db->get('kontrak_sub');
		$kontrak_sub = $query->result();

		#getdata kontrak_sub
		$this->db->where('fk_kontrak',$id);
		$query = $this->db->get('kontrak_penandatanganan');
		$kontrak_penandatanganan = $query->result();

		#senddata toview
		$data['kontrak'] = $kontrak;
		$data['kontrak_sub'] = $kontrak_sub;
		$data['kontrak_penandatanganan'] = $kontrak_penandatanganan;
		$this->load->view('detail_kontrak',$data);
	}

	
}
