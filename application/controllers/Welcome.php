<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['pageTitle'] = 'KCDEV is Awesome';
		$data['pesanPertama'] = 'Hello from your EX';
		$data['pesanKedua'] = 'Hello';
		$data['pesanKetiga'] = 'Data ini dari controller welcome';
		
		// Memanggil model alumni
		$this->load->model('m_alumni');

		// Mengambil data dari model
		$data['alumni'] = $this->m_alumni->getAlumni();

		$this->load->view('welcome_message', $data);


	}
}
