<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home');

		if (empty($this->session->userdata('status')) || $this->session->userdata('status') !== "LogedIn") {
			return redirect('logout');
		} else {
			if (!empty($this->session->userdata('userdata')->privilege) && $this->session->userdata('userdata')->privilege !== 'superadmin') {
				return redirect('logout');
			}
		}
	}
	public function index()
	{
		$data = [
			'active_controller' => 'home',
			'active_function' => 'index',
			'sidebar' => 'sidebar_admin',
		];
		

		$this->load->view('adminlte3/global/home', $data);
	}
}
