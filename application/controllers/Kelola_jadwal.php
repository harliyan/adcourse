<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kelola_jadwal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_kelola_jadwal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tb_kelola_jadwal/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tb_kelola_jadwal/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tb_kelola_jadwal/index.html';
            $config['first_url'] = base_url() . 'tb_kelola_jadwal/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tb_kelola_jadwal_model->total_rows($q);
        $tb_kelola_jadwal = $this->Tb_kelola_jadwal_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tb_kelola_jadwal_data' => $tb_kelola_jadwal,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'active_controller' => 'kelola_jadwal',
            'active_function' => 'index',
            'topbar' => 'topbar',
            'menu' => 'menu',
        );
       $this->load->view('front/global/index', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_kelola_jadwal_model->get_by_id($id);
        if ($row) {
            $data = array(
              'id' => $row->id,
              'jam_bimbingan' => $row->jam_bimbingan,
              'jumlah_siswa' => $row->jumlah_siswa,
              'hari_bimbingan' => $row->hari_bimbingan,
              'mata_pelajaran' => $row->mata_pelajaran,
          );
            $this->load->view('tb_kelola_jadwal/tb_kelola_jadwal_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_kelola_jadwal'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tb_kelola_jadwal/create_action'),
            'id' => set_value('id'),
            'jam_bimbingan' => set_value('jam_bimbingan'),
            'jumlah_siswa' => set_value('jumlah_siswa'),
            'hari_bimbingan' => set_value('hari_bimbingan'),
            'mata_pelajaran' => set_value('mata_pelajaran'),
        );
        $this->load->view('tb_kelola_jadwal/tb_kelola_jadwal_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
              'jam_bimbingan' => $this->input->post('jam_bimbingan',TRUE),
              'jumlah_siswa' => $this->input->post('jumlah_siswa',TRUE),
              'hari_bimbingan' => $this->input->post('hari_bimbingan',TRUE),
              'mata_pelajaran' => $this->input->post('mata_pelajaran',TRUE),
          );

            $this->Tb_kelola_jadwal_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tb_kelola_jadwal'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_kelola_jadwal_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tb_kelola_jadwal/update_action'),
                'id' => set_value('id', $row->id),
                'jam_bimbingan' => set_value('jam_bimbingan', $row->jam_bimbingan),
                'jumlah_siswa' => set_value('jumlah_siswa', $row->jumlah_siswa),
                'hari_bimbingan' => set_value('hari_bimbingan', $row->hari_bimbingan),
                'mata_pelajaran' => set_value('mata_pelajaran', $row->mata_pelajaran),
            );
            $this->load->view('tb_kelola_jadwal/tb_kelola_jadwal_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_kelola_jadwal'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
              'jam_bimbingan' => $this->input->post('jam_bimbingan',TRUE),
              'jumlah_siswa' => $this->input->post('jumlah_siswa',TRUE),
              'hari_bimbingan' => $this->input->post('hari_bimbingan',TRUE),
              'mata_pelajaran' => $this->input->post('mata_pelajaran',TRUE),
          );

            $this->Tb_kelola_jadwal_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tb_kelola_jadwal'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_kelola_jadwal_model->get_by_id($id);

        if ($row) {
            $this->Tb_kelola_jadwal_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tb_kelola_jadwal'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tb_kelola_jadwal'));
        }
    }

    public function _rules() 
    {
       $this->form_validation->set_rules('jam_bimbingan', 'jam bimbingan', 'trim|required');
       $this->form_validation->set_rules('jumlah_siswa', 'jumlah siswa', 'trim|required');
       $this->form_validation->set_rules('hari_bimbingan', 'hari bimbingan', 'trim|required');
       $this->form_validation->set_rules('mata_pelajaran', 'mata pelajaran', 'trim|required');

       $this->form_validation->set_rules('id', 'id', 'trim');
       $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
   }

}

/* End of file Tb_kelola_jadwal.php */
/* Location: ./application/controllers/Tb_kelola_jadwal.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-12-17 11:07:14 */
/* http://harviacode.com */