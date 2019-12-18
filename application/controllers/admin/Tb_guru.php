<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_guru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_guru_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tb_guru/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tb_guru/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tb_guru/index.html';
            $config['first_url'] = base_url() . 'tb_guru/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tb_guru_model->total_rows($q);
        $tb_guru = $this->Tb_guru_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tb_guru_data' => $tb_guru,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'active_controller' => 'tb_guru',
            'active_function' => 'tb_guru_list',
            'sidebar' => 'sidebar_admin'
        );
        $this->load->view('adminlte3/global/home', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_guru_model->get_by_id($id);
        if ($row) {
            $data = array(
              'id' => $row->id,
              'nama' => $row->nama,
              'alamat' => $row->alamat,
              'no_hp' => $row->no_hp,
              'active_controller' => 'tb_guru',
              'active_function' => 'tb_guru_read',
              'sidebar' => 'sidebar_admin'
          );
            $this->load->view('adminlte3/global/home', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/tb_guru'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('admin/tb_guru/create_action'),
            'id' => set_value('id'),
            'nama' => set_value('nama'),
            'alamat' => set_value('alamat'),
            'no_hp' => set_value('no_hp'),
            'active_controller' => 'tb_guru',
            'active_function' => 'tb_guru_form',
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
              'alamat' => $this->input->post('alamat',TRUE),
              'no_hp' => $this->input->post('no_hp',TRUE),
          );

            $this->Tb_guru_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/tb_guru'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_guru_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('admin/tb_guru/update_action'),
                'id' => set_value('id', $row->id),
                'nama' => set_value('nama', $row->nama),
                'alamat' => set_value('alamat', $row->alamat),
                'no_hp' => set_value('no_hp', $row->no_hp),
                'active_controller' => 'tb_guru',
                'active_function' => 'tb_guru_form',
                'sidebar' => 'sidebar_admin'
            );
            $this->load->view('adminlte3/global/home', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/tb_guru'));
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
              'alamat' => $this->input->post('alamat',TRUE),
              'no_hp' => $this->input->post('no_hp',TRUE),
          );

            $this->Tb_guru_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/tb_guru'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_guru_model->get_by_id($id);

        if ($row) {
            $this->Tb_guru_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/tb_guru'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/tb_guru'));
        }
    }

    public function _rules() 
    {
       $this->form_validation->set_rules('nama', 'nama', 'trim|required');
       $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
       $this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');

       $this->form_validation->set_rules('id', 'id', 'trim');
       $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
   }

}

/* End of file Tb_guru.php */
/* Location: ./application/controllers/Tb_guru.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-12-17 15:40:18 */
/* http://harviacode.com */