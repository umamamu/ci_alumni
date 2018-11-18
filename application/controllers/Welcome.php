<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['pageTitle'] = 'KCDEV is Awesome';
		$data['pesanPertama'] = 'Hello from your EX';
		$data['pesanKedua'] = 'Hello';
		$data['pesanKetiga'] = 'Data ini dari controller welcome';
		$this->load->view('welcome_message', $data);
	}
}
