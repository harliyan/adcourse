<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_home');
		$this->load->model('M_verifikasi');
		if (empty($this->session->userdata('status')) || $this->session->userdata('status') !== "LogedIn") {
			return redirect('logout');
		} else {
			if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'superadmin') 
			{
				return redirect('logout');		
			}
		}
	}
	public function index()
	{
		$data = [
			'active_controller' => 'verifikasi',
			'active_function' => 'index',
			'sidebar' => 'sidebar_admin',
		];
		$this->load->view('adminlte3/global/home', $data);
	}	
}
