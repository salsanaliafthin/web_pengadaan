<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function index()
	{
		$this->load->view('login');
	}

	public function proses()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$this->db-> where('username', $username);
		$this->db-> where('password', $password);

		$query=$this->db->get('user');
		
		if($query->num_rows() == 1){
			$sess_data = array(
				'username' => $username,
			);
			$this->session->set_userdata('logged_in',$sess_data);
			redirect('Dashboard');
		}else{
			$this->session->set_flashdata('message',"Gagal Login");
			redirect('Login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
}

