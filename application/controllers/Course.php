<?php //enkripsi ada di file register, M_admin, M_pelamar, M_users
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('pagination');
    $this->load->helper('url');
    $this->load->model('M_materi');
  }

  public function index()
  {
    $keyword = null;
    if ($this->input->post('search')) {
      $keyword = $this->input->post('keyword');
    }

    $data = [
     'active_controller' => 'course',
     'active_function' => 'index',
     'topbar' => 'topbar',
     'menu' => 'menu',
   ];

    //Coba Pagination
   $coba = 5;
    $data['page']           = $this->uri->segment(3);                       //bikin segment halaman
    $config['base_url']     = site_url('course/index');                       //arah site dan function nya
    $config['total_rows']   = $this->db->count_all('tb_materi');          //total row
    $config['per_page']     = 8;                                            //show data per halaman
    $choice                 = $config["total_rows"] / $config["per_page"];
    $config["num_links"]    = floor($coba);

    if ($keyword == null) {
      $data['materi']  = $this->M_materi->tampil($config['per_page'], $data['page']);
    } else {
      $data['materi']  = $this->M_materi->search($keyword);
    }

    $data['kecamatan']    = "home";

    // Membuat Style pagination untuk BootStrap v4
    $config['first_link']       = 'First';
    $config['last_link']        = 'Last';
    $config['next_link']        = 'Next';
    $config['prev_link']        = 'Prev';
    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';

    $this->pagination->initialize($config);

    //Bikin pagination di bawah berdasarkan fungsi create_links 
    $data['pagination'] = $this->pagination->create_links();

    $this->load->view('front/global/index', $data);
  }

  public function tambah_aksi()
  {
    // $config['upload_path']          = '../siapkawal/uploads/';
    // $config['allowed_types']        = 'gif|jpg|png';
    // $config['max_size']             = 80000;
    // $config['max_width']            = 80000;
    // $config['max_height']           = 80000;

    // $this->load->library('upload', $config);
    // $this->upload->do_upload('path_foto');

    $id = $this->input->post('id');
    $data = array(
      'id_record' => $this->input->post('id_record'),
      'id' => $this->input->post('id'),
      'judul' => $this->input->post('judul'),
      'path_sambutan' => $this->input->post('path_sambutan'),
      'nik' => $this->input->post('nik'),
    );

    $this->M_sambutan->input_nik($data, 'tb_record_sambutan');
    redirect('sambutan/download/' . $id);

    // echo site_url('articel/' . $id . '/' . url_title($title));
  }

  public function details($id)
  {
    $tb_doc_sambutan = $this->M_materi->getDetail('tb_materi', $id);

    $data['tb_doc_sambutan'] = $tb_doc_sambutan;
    $data['active_controller'] = 'course';
    $data['active_function'] = 'details';
    $data['topbar'] = 'topbar';
    $data['menu'] = 'menu';


    $this->load->view('front/global/index', $data);
  }


  public function download($id)
  {
    $tb_doc_sambutan = $this->M_sambutan->download('tb_doc_sambutan', $id);

    $data['tb_doc_sambutan'] = $tb_doc_sambutan;
    $data['active_controller'] = 'sambutan';
    $data['active_function'] = 'download';
    $data['topbar'] = 'topbar_details';
    $data['menu'] = 'menu_details';


    $this->load->view('front/global/index', $data);
  }
}
