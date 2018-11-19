<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function cekAkun()
	{
		$this->load->model('m_users');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->m_users->cekAkun($username, $password);

		if (!$query) {
			$this->form_validation->set_message('cekAkun','Username atau password yang anda masukan salah!');
			return FALSE;
		} else {
			$userData = array(
				'username' => $query->username,
				'level' => $query->level,
				'logged_in' => TRUE				
			);

			$this->session->set_userdata($userData);
			return TRUE;
		}
	}

	public function login()
	{
		// jika user telah login, redirect ke base_url
		if ($this->session->userdata('logged_in')) redirect(base_url());

		// jika form di submit jalankan kode ini
		if ($this->input->post('submit')) {
			// mengatur validasi data username
			$this->form_validation->set_rules('username','Username','required');
			// mengatur validasi password
			$this->form_validation->set_rules('password','Password','required|callback_cekAkun');
			// pesan error validasi data
			$this->form_validation->set_message('required','%s tidak boleh kosong!');

			// jika semuanya benar maka redirect ke controller dashboard
			if ($this->form_validation->run() === TRUE) {
				redirect('dashboard');
			}
		}

		// jalankan view auth/login/php
		$this->load->view('auth/login');
	}

	public function logout()
	{
		// hapus semua data pada session
		$this->session->sess_destroy();

		// redirect ke halaman login
		redirect('auth/login');
	}
}
?>