<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends CI_Controller {
		
		public function index()
		{
			$data['pageTitle'] = 'Dashboard';
			$data['pageContent'] = $this->load->view('dashboard/main', null, true);
			$this->load->view('template/layout', $data);
		}
}