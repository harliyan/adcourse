<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_tryout extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_tryout_model');
        $this->load->library('form_validation');        
        $this->load->library('datatables');
    }

    public function index()
    {
       $data = [
          'active_controller' => 'tb_tryout',
          'active_function' => 'tb_tryout_list',
          'sidebar' => 'sidebar_admin'
      ];

      $this->load->view('adminlte3/global/home', $data);
  } 

  public function json() {
    header('Content-Type: application/json');
    echo $this->Tb_tryout_model->json();
}

public function read($id) 
{
    $row = $this->Tb_tryout_model->get_by_id($id);
    if ($row) {
        $data = array(
          'Id' => $row->Id,
          'kode' => $row->kode,
          'tryout' => $row->tryout,
          'nama_siswa' => $row->nama_siswa,
          'jurusan' => $row->jurusan,
          'alamat' => $row->alamat,
          'asal_sekolah' => $row->asal_sekolah,
          'nilai' => $row->nilai,
          'active_controller' => 'tb_tryout',
          'active_function' => 'tb_tryout_form',
          'sidebar' => 'sidebar_admin'
      );
        $this->load->view('adminlte3/global/home', $data);
    } else {
        $this->session->set_flashdata('message', 'Record Not Found');
        redirect(site_url('admin/tb_tryout'));
    }
}

public function create() 
{
    $data = array(
        'button' => 'Create',
        'action' => site_url('admin/tb_tryout/create_action'),
        'Id' => set_value('Id'),
        'kode' => set_value('kode'),
        'tryout' => set_value('tryout'),
        'nama_siswa' => set_value('nama_siswa'),
        'jurusan' => set_value('jurusan'),
        'alamat' => set_value('alamat'),
        'asal_sekolah' => set_value('asal_sekolah'),
        'nilai' => set_value('nilai'),
        'active_controller' => 'tb_tryout',
        'active_function' => 'tb_tryout_form',
        'sidebar' => 'sidebar_admin'
    );
    $this->load->view('adminlte3/global/home', $data);
}

public function create_action() 
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->create();
    } else {
        $data = array(
          'kode' => $this->input->post('kode',TRUE),
          'tryout' => $this->input->post('tryout',TRUE),
          'nama_siswa' => $this->input->post('nama_siswa',TRUE),
          'jurusan' => $this->input->post('jurusan',TRUE),
          'alamat' => $this->input->post('alamat',TRUE),
          'asal_sekolah' => $this->input->post('asal_sekolah',TRUE),
          'nilai' => $this->input->post('nilai',TRUE),
      );

        $this->Tb_tryout_model->insert($data);
        $this->session->set_flashdata('message', 'Create Record Success');
        redirect(site_url('admin/tb_tryout'));
    }
}

public function update($id) 
{
    $row = $this->Tb_tryout_model->get_by_id($id);

    if ($row) {
        $data = array(
            'button' => 'Update',
            'action' => site_url('tb_tryout/update_action'),
            'Id' => set_value('Id', $row->Id),
            'kode' => set_value('kode', $row->kode),
            'tryout' => set_value('tryout', $row->tryout),
            'nama_siswa' => set_value('nama_siswa', $row->nama_siswa),
            'jurusan' => set_value('jurusan', $row->jurusan),
            'alamat' => set_value('alamat', $row->alamat),
            'asal_sekolah' => set_value('asal_sekolah', $row->asal_sekolah),
            'nilai' => set_value('nilai', $row->nilai),
            'active_controller' => 'tb_tryout',
            'active_function' => 'tb_tryout_form',
            'sidebar' => 'sidebar_admin'
        );
         $this->load->view('adminlte3/global/home', $data);
    } else {
        $this->session->set_flashdata('message', 'Record Not Found');
        redirect(site_url('admin/tb_tryout'));
    }
}

public function update_action() 
{
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
        $this->update($this->input->post('Id', TRUE));
    } else {
        $data = array(
          'kode' => $this->input->post('kode',TRUE),
          'tryout' => $this->input->post('tryout',TRUE),
          'nama_siswa' => $this->input->post('nama_siswa',TRUE),
          'jurusan' => $this->input->post('jurusan',TRUE),
          'alamat' => $this->input->post('alamat',TRUE),
          'asal_sekolah' => $this->input->post('asal_sekolah',TRUE),
          'nilai' => $this->input->post('nilai',TRUE),
      );

        $this->Tb_tryout_model->update($this->input->post('Id', TRUE), $data);
        $this->session->set_flashdata('message', 'Update Record Success');
        redirect(site_url('admin/tb_tryout'));
    }
}

public function delete($id) 
{
    $row = $this->Tb_tryout_model->get_by_id($id);

    if ($row) {
        $this->Tb_tryout_model->delete($id);
        $this->session->set_flashdata('message', 'Delete Record Success');
        redirect(site_url('admin/tb_tryout'));
    } else {
        $this->session->set_flashdata('message', 'Record Not Found');
        redirect(site_url('admin/tb_tryout'));
    }
}

public function _rules() 
{
	$this->form_validation->set_rules('kode', 'kode', 'trim|required');
	$this->form_validation->set_rules('tryout', 'tryout', 'trim|required');
	$this->form_validation->set_rules('nama_siswa', 'nama siswa', 'trim|required');
	$this->form_validation->set_rules('jurusan', 'jurusan', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('asal_sekolah', 'asal sekolah', 'trim|required');
	$this->form_validation->set_rules('nilai', 'nilai', 'trim|required');

	$this->form_validation->set_rules('Id', 'Id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
}

}

/* End of file Tb_tryout.php */
/* Location: ./application/controllers/Tb_tryout.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-12-18 15:15:25 */
/* http://harviacode.com */