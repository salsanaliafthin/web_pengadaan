<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengadaan extends CI_Controller {


	public function index()
	{

		$this->load->view('pengadaan/pengadaan');
	}

	public function tambah()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('pengadaan/tambah');
		}else{
			#checkpetermin
			$carapembayaran = ""; 
			if ($this->input->post('carapembayaran') == "langsung") {
				$carapembayaran = "langsung";
			}else{
				$carapembayaran = "petermin ".$this->input->post('petermin')."%";
			}


			#input kontrak
			$set = [
				'nama'=> $this->input->post('nama'),
				'tanggal'=> $this->input->post('tanggal'),
				'nomor'=> $this->input->post('nomor'),
				'inisiator'=> $this->input->post('inisiator'),
				'nilai'=> $this->input->post('nilai'),
				'carapembayaran'=> $carapembayaran,
				'pelaksanaan_from'=> $this->input->post('pelaksanaan_from'),
				'pelaksanaan_to'=> $this->input->post('pelaksanaan_to'),
				'pemeliharaan_from'=> $this->input->post('pemeliharaan_from'),
				'pemeliharaan_to'=> $this->input->post('pemeliharaan_to'),
				'garansijaminan_from'=> $this->input->post('garansijaminan_from'),
				'garansijaminan_to'=> $this->input->post('garansijaminan_to'),
				'keterangan'=> $this->input->post('keterangan'),
				'status'=> $this->input->post('status'),
			];

			$this->db->insert('kontrak',$set);

			$id_kontrak = $this->db->insert_id();

			$namaperseroan = $this->input->post('namaperseroan');
			$perwakilan = $this->input->post('perwakilan');
			for($idx_penandatanganan = 0; $idx_penandatanganan < count($namaperseroan); $idx_penandatanganan++){
				$set_penandatanganan = [
					'fk_kontrak' => $id_kontrak,
					'nama_perseroan' => $namaperseroan[$idx_penandatanganan],
					'nama_perwakilan' => $perwakilan[$idx_penandatanganan],
				];
				$this->db->insert('kontrak_penandatanganan',$set_penandatanganan);
			}

			$subnama = $this->input->post('subkontrak');
			for($idx_subnama = 0; $idx_subnama < count($subnama); $idx_subnama++){
				$set_sub = [
					'fk_kontrak' => $id_kontrak,
					'nama' => $subnama[$idx_subnama],
				];
				$this->db->insert('kontrak_sub',$set_sub);
			}

			#vardump
			echo "<pre>";
			var_dump($_POST);
			echo "</pre>";
		}
	}

}
