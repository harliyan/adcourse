<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tb_kelola_kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_kelola_kelas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tb_kelola_kelas/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tb_kelola_kelas/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tb_kelola_kelas/index.html';
            $config['first_url'] = base_url() . 'tb_kelola_kelas/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tb_kelola_kelas_model->total_rows($q);
        $tb_kelola_kelas = $this->Tb_kelola_kelas_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tb_kelola_kelas_data' => $tb_kelola_kelas,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'active_controller' => 'tb_kelola_kelas',
            'active_function' => 'tb_kelola_kelas_list',
            'sidebar' => 'sidebar_admin'
        );


        $this->load->view('adminlte3/global/home', $data);
        // $this->load->view('adminlte3/tb_kelola_kelas/tb_kelola_kelas_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tb_kelola_kelas_model->get_by_id($id);
        if ($row) {
            $data = array(
              'id' => $row->id,
              'kelas' => $row->kelas,
              'kapasitas' => $row->kapasitas,
              'jam_tersedia' => $row->jam_tersedia,
              'active_controller' => 'tb_kelola_kelas',
              'active_function' => 'tb_kelola_kelas_read',
              'sidebar' => 'sidebar_admin'
          );
            $this->load->view('adminlte3/global/home', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/tb_kelola_kelas'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('admin/tb_kelola_kelas/create_action'),
            'id' => set_value('id'),
            'kelas' => set_value('kelas'),
            'kapasitas' => set_value('kapasitas'),
            'jam_tersedia' => set_value('jam_tersedia'),
            'active_controller' => 'tb_kelola_kelas',
            'active_function' => 'tb_kelola_kelas_form',
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
              'kelas' => $this->input->post('kelas',TRUE),
              'kapasitas' => $this->input->post('kapasitas',TRUE),
              'jam_tersedia' => $this->input->post('jam_tersedia',TRUE),
          );

            $this->Tb_kelola_kelas_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/tb_kelola_kelas'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tb_kelola_kelas_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('admin/tb_kelola_kelas/update_action'),
                'id' => set_value('id', $row->id),
                'kelas' => set_value('kelas', $row->kelas),
                'kapasitas' => set_value('kapasitas', $row->kapasitas),
                'jam_tersedia' => set_value('jam_tersedia', $row->jam_tersedia),
                'active_controller' => 'tb_kelola_kelas',
                'active_function' => 'tb_kelola_kelas_form',
                'sidebar' => 'sidebar_admin'
            );
            $this->load->view('adminlte3/global/home', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/tb_kelola_kelas'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
              'kelas' => $this->input->post('kelas',TRUE),
              'kapasitas' => $this->input->post('kapasitas',TRUE),
              'jam_tersedia' => $this->input->post('jam_tersedia',TRUE),
          );

            $this->Tb_kelola_kelas_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/tb_kelola_kelas'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tb_kelola_kelas_model->get_by_id($id);

        if ($row) {
            $this->Tb_kelola_kelas_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/tb_kelola_kelas'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/tb_kelola_kelas'));
        }
    }

    public function _rules() 
    {
       $this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
       $this->form_validation->set_rules('kapasitas', 'kapasitas', 'trim|required');
       $this->form_validation->set_rules('jam_tersedia', 'jam tersedia', 'trim|required');

       $this->form_validation->set_rules('id', 'id', 'trim');
       $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
   }

}

/* End of file Tb_kelola_kelas.php */
/* Location: ./application/controllers/Tb_kelola_kelas.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-12-17 08:01:38 */
/* http://harviacode.com */