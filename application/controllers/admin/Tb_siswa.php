<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_siswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tb_siswa/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tb_siswa/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tb_siswa/index.html';
            $config['first_url'] = base_url() . 'tb_siswa/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tb_siswa_model->total_rows($q);
        $tb_siswa = $this->Tb_siswa_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tb_siswa_data' => $tb_siswa,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'active_controller' => 'tb_siswa',
            'active_function' => 'tb_siswa_list',
            'sidebar' => 'sidebar_admin'
        );
        $this->load->view('adminlte3/global/home', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_siswa_model->get_by_id($id);
        if ($row) {
            $data = array(
              'id' => $row->id,
              'nama' => $row->nama,
              'jurusan' => $row->jurusan,
              'alamat' => $row->alamat,
              'asal_sekolah' => $row->asal_sekolah,
            'active_controller' => 'tb_siswa',
              'active_function' => 'tb_siswa_read',
              'sidebar' => 'sidebar_admin'
          );
            $this->load->view('adminlte3/global/home', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/tb_siswa'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('admin/tb_siswa/create_action'),
            'id' => set_value('id'),
            'nama' => set_value('nama'),
            'jurusan' => set_value('jurusan'),
            'alamat' => set_value('alamat'),
            'asal_sekolah' => set_value('asal_sekolah'),
            'active_controller' => 'tb_siswa',
            'active_function' => 'tb_siswa_form',
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
              'nama' => $this->input->post('nama',TRUE),
              'jurusan' => $this->input->post('jurusan',TRUE),
              'alamat' => $this->input->post('alamat',TRUE),
              'asal_sekolah' => $this->input->post('asal_sekolah',TRUE),
          );

            $this->Tb_siswa_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/tb_siswa'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_siswa_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('admin/tb_siswa/update_action'),
                'id' => set_value('id', $row->id),
                'nama' => set_value('nama', $row->nama),
                'jurusan' => set_value('jurusan', $row->jurusan),
                'alamat' => set_value('alamat', $row->alamat),
                'asal_sekolah' => set_value('asal_sekolah', $row->asal_sekolah),
                'active_controller' => 'tb_siswa',
                'active_function' => 'tb_siswa_form',
                'sidebar' => 'sidebar_admin'
            );
            $this->load->view('adminlte3/global/home', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/tb_siswa'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
              'nama' => $this->input->post('nama',TRUE),
              'jurusan' => $this->input->post('jurusan',TRUE),
              'alamat' => $this->input->post('alamat',TRUE),
              'asal_sekolah' => $this->input->post('asal_sekolah',TRUE),
          );

            $this->Tb_siswa_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/tb_siswa'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_siswa_model->get_by_id($id);

        if ($row) {
            $this->Tb_siswa_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/tb_siswa'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/tb_siswa'));
        }
    }

    public function _rules() 
    {
       $this->form_validation->set_rules('nama', 'nama', 'trim|required');
       $this->form_validation->set_rules('jurusan', 'jurusan', 'trim|required');
       $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
       $this->form_validation->set_rules('asal_sekolah', 'asal sekolah', 'trim|required');

       $this->form_validation->set_rules('id', 'id', 'trim');
       $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
   }

}

/* End of file Tb_siswa.php */
/* Location: ./application/controllers/Tb_siswa.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-12-17 15:40:18 */
/* http://harviacode.com */