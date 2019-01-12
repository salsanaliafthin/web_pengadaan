<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		#menghilangkan superadmin
		$this->db->where('username !=','superadmin');
		#query untuk mengambil table user sama serperti "select * from user"
		$query = $this->db->get('user');

		#mengambil data dari query
		$result_user = $query->result();

		#agar data dapat dimasukan ke view maka membuat array untuk mengirim data pada view
		$data['datauser'] = $result_user;

		#untuk mengirim data ke view dengan cara ditambahi ,$data
		$this->load->view('pegawai/pegawai',$data);
	}

	#fungsi untuk tambah user cara memanggil e iku NamaController/namafungsi
	public function tambah()
	{
		#fungis untuk memberikan validation pada form input username
		$this->form_validation->set_rules('username',"Username","trim|required");

		#mengecek apakah validasi benar apa salah
		if ($this->form_validation->run() == false) {
			#jika salah menampilkan form 
			$this->load->view('pegawai/tambah');
		}else{
			#jika benar melakukan input data ke database

			#mengambil data dari inputan
			$set = array(
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'npp' => $this->input->post('npp'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
			);

			#fungsi insert ke database
			$this->db->insert('user',$set);

			#berpindah halaman ke TablePegawai
			redirect('Pegawai');

		}
	}

	#fungsi untuk tambah user cara memanggil e iku NamaController/namafungsi
	public function edit($id)
	{
		#ambil data sesuai id
		$query = $this->db->where('id_user',$id)->get('user');

		#ambil data darri query diatas
		$result_user = $query->row(0);

		#mengirim data ke form update
		$data = array(
			'datauser' => $result_user,
		);

		#fungis untuk memberikan validation pada form input username
		$this->form_validation->set_rules('username',"Username","trim|required");

		#mengecek apakah validasi benar apa salah
		if ($this->form_validation->run() == false) {
			#jika salah menampilkan form 
			$this->load->view('pegawai/edit',$data);
		}else{
			#jika benar melakukan input data ke database

			#mengambil data dari inputan
			$set = array(
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'npp' => $this->input->post('npp'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
			);
			#fungis filter id
			$this->db->where('id_user',$id);

			#fungsi update ke database
			$this->db->update('user',$set);

			#berpindah halaman ke TablePegawai
			redirect('Pegawai');

		}
	}

	public function hapus($id)
	{
		#delete data di database
		$this->db->where('id_user',$id)->delete('user');

		redirect('Pegawai');
	}
}
