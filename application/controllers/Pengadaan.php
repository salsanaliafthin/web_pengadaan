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
				$carapembayaran = "petermin";
			}


			#input kontrak
			$set = [
				'nama'=> $this->input->post('nama'),
				'tanggal'=> $this->input->post('tanggal'),
				'nomor'=> $this->input->post('nomor'),
				'inisiator_nama'=> $this->input->post('inisiator_nama'),
				'inisiator_devisi'=> $this->input->post('inisiator_devisi'),
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
				if ($set_penandatanganan['nama_perseroan'] != "") {
					$this->db->insert('kontrak_penandatanganan',$set_penandatanganan);
				}
			}

			$subnama = $this->input->post('subkontrak');
			for($idx_subnama = 0; $idx_subnama < count($subnama); $idx_subnama++){
				$set_sub = [
					'fk_kontrak' => $id_kontrak,
					'nama' => $subnama[$idx_subnama],
				];
				if ($set_sub['nama'] != "") {
					$this->db->insert('kontrak_sub',$set_sub);
				}
			}

			$petermin = $this->input->post('petermin');
			for($idx_petermin = 0; $idx_petermin < count($petermin); $idx_petermin++){
				$set_petermin = [
					'fk_kontrak' => $id_kontrak,
					'petermin' => $petermin[$idx_petermin],
				];
				if ($set_petermin['petermin'] != "") {
					$this->db->insert('kontrak_petermin',$set_petermin);
				}
			}

			redirect('Dashboard');
			#vardump
			// echo "<pre>";
			// var_dump($_POST);
			// echo "</pre>";
		}
	}


	public function edit($id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama','required');
		if ($this->form_validation->run() == FALSE) {

		#getdata kontrak
			$this->db->where('id',$id);
			$query = $this->db->get('kontrak');
			$kontrak = $query->row(0);

		#getdata kontrak_sub
			$this->db->where('fk_kontrak',$id);
			$query = $this->db->get('kontrak_sub');
			$kontrak_sub = $query->result();

		#getdata kontrak_penandatanganan
			$this->db->where('fk_kontrak',$id);
			$query = $this->db->get('kontrak_penandatanganan');
			$kontrak_penandatanganan = $query->result();


		#getdata kontrak_petermin
			$this->db->where('fk_kontrak',$id);
			$query = $this->db->get('kontrak_petermin');
			$kontrak_petermin = $query->result();

		#senddata toview
			$data['kontrak'] = $kontrak;
			$data['kontrak_sub'] = $kontrak_sub;
			$data['kontrak_penandatanganan'] = $kontrak_penandatanganan;
			$data['kontrak_petermin'] = $kontrak_petermin;

			$this->load->view('pengadaan/edit',$data);
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
				'inisiator_nama'=> $this->input->post('inisiator_nama'),
				'inisiator_devisi'=> $this->input->post('inisiator_devisi'),
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

			$this->db->where('id',$id);
			$this->db->update('kontrak',$set);

			$id_kontrak = $id;

			$idpenandatanganan = $this->input->post('idpenandatanganan');
			$namaperseroan = $this->input->post('namaperseroan');
			$perwakilan = $this->input->post('perwakilan');
			for($idx_penandatanganan = 0; $idx_penandatanganan < count($namaperseroan); $idx_penandatanganan++){
				$set_penandatanganan = [
					'fk_kontrak' => $id_kontrak,
					'nama_perseroan' => $namaperseroan[$idx_penandatanganan],
					'nama_perwakilan' => $perwakilan[$idx_penandatanganan],
				];
				if ($set_penandatanganan['nama_perseroan'] != null) {
					if ($idpenandatanganan[$idx_penandatanganan] != "new") {
					$this->db->where('id',$idpenandatanganan[$idpenandatanganan]);
					$this->db->update('kontrak_penandatanganan',$set_penandatanganan);
				}else{
					$this->db->update('kontrak_penandatanganan',$set_penandatanganan);
				}
				}
			}

			$idsubkontrak = $this->input->post('idsubkontrak');
			$subnama = $this->input->post('subkontrak');
			for($idx_subnama = 0; $idx_subnama < count($subnama); $idx_subnama++){
				$set_sub = [
					'fk_kontrak' => $id_kontrak,
					'nama' => $subnama[$idx_subnama],
				];
				if ($set_sub['nama'] != null) {
					if ($idsubkontrak[$idx_subnama] != "new") {
					$this->db->where('id',$idsubkontrak[$idx_subnama]);
					$this->db->update('kontrak_sub',$set_sub);
				}else{
					$this->db->insert('kontrak_sub',$set_sub);
				}
				}
			}

			$idpetermin = $this->input->post('idpetermin');
			$petermin = $this->input->post('subkontrak');
			for($idx_petermin = 0; $idx_petermin < count($petermin); $idx_petermin++){
				$set_petermin = [
					'fk_kontrak' => $id_kontrak,
					'petermin' => $petermin[$idx_petermin],
				];
				if ($set_petermin['petermin'] != null) {
					if ($idpetermin[$idx_petermin] != "new") {
					$this->db->where('id',$idpetermin[$idx_petermin]);
					$this->db->update('kontrak_petermin',$set_petermin);
				}else{
					$this->db->insert('kontrak_petermin',$set_petermin);
				}
				}
			}

			redirect('Dashboard');
			#vardump
			echo "<pre>";
			var_dump($_POST);
			echo "</pre>";
		}
	}

	public function delete($id)
	{
		#delete kontrak_sub
		$this->db->where('fk_kontrak',$id);
		$this->db->delete('kontrak_sub');

		#delete kontrak_penandatanganan
		$this->db->where('fk_kontrak',$id);
		$this->db->delete('kontrak_penandatanganan');

		#delete kontrak
		$this->db->where('id',$id);
		$this->db->delete('kontrak');

		redirect('Dashboard','refresh');
	}

}
