<?php   //privilege
print_data('get_where', array('users', array('id_user'=>$this->session->userdata('id'))), 'privilege') == 'admin';
$cetak = print_data('get_where', array('users', array('id_user'=>$this->session->userdata('id'))), 'username');
?>

<style>
 .garis_tepi1 {
   border: 2px solid skyblue;
 }
 .garis_tepi2 {
   border: 10px dotted blue;
 }
</style>
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-12 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle"> SIAP KAWAL</span>
    <h1 class="page-title">INPUT DATA SAMBUTAN</h1>
  </div>
</div>
<!-- End Page Header -->

<?php if($this->session->flashdata('success')){ ?>  
 <div class="alert alert-success">  
   <a href="#" class="close" data-dismiss="alert">&times;</a>  
   <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>  
 </div>  
<?php } else if($this->session->flashdata('error')){ ?>  
 <div class="alert alert-danger">  
   <a href="#" class="close" data-dismiss="alert">&times;</a>  
   <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>  
 </div>  
<?php } else if($this->session->flashdata('warning')){ ?>  
 <div class="alert alert-warning">  
   <a href="#" class="close" data-dismiss="alert">&times;</a>  
   <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>  
 </div>  
<?php } else if($this->session->flashdata('info')){ ?>  
 <div class="alert alert-info">  
   <a href="#" class="close" data-dismiss="alert">&times;</a>  
   <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>  
 </div>  
<?php } ?>  

<!-- form input -->
<!-- form input -->
<div class="row">
  <div class="col-lg-6">
    <div class="card mb-4">
      <div class="card-body">
        <p class="card-text">Masukan Sambutan Kegiatan Wali Kota Pekalongan</p>
        <button type="button" data-toggle="modal" data-target="#tambah-data" class="btn btn-info" class="glyphicon glyphicon-repeat">Tambah File dan Deskripsi</button>
      </div>
    </div>
  </div>

<div class="row">
  <div class="col">
    <div class="card mb-4">
      <div class="card-body">
        <!-- TABLE -->
        <div style="overflow-x:auto;">
         <table id="example2" class="table table-bordered table-striped" style="width:auto">
          <thead class="thead-dark">
            <tr class="text-black">
              <th style="text-align: center;">No</th>
              <th style="text-align: center;">Judul Sambutan</th>
              <th style="text-align: center;">Caption Sambutan</th>
              <th style="text-align: center;">Path Sambutan</th>
              <th style="text-align: center;" width="170px">Aksi</th>


            </tr>
          </thead>

          <tbody>
            <?php 
            $no=1;
            foreach ($doc_sambutan as $data)
              : ?>
            <tr>
              <td style="text-align: center;"><?php echo $no++; ?></td>
              <td style="text-align: center;"><?php echo $data -> judul; ?></td>
              <td style="text-align: center;"><?php echo $data -> caption; ?></td>
              <td style="text-align: center;"><?php echo $data -> path_sambutan; ?></td>
              <td style="text-align: center;">
                <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>superadmin/input_sambutan/edit/<?php echo $data->id ?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>superadmin/input_sambutan/hapus/<?php echo $data->id ?>" onclick="return confirm('Yakin ingin menghapus?')" >Delete</a>
              </td>

              
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal 1 -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title text-center">Form Input Sambutan</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url('superadmin/input_sambutan/tambah_aksi')?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleFormControlInput1">Judul Sambuatan</label>
              <input type="text" class="form-control" name="judul" placeholder="Masukan Judul Sambutan" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Caption/Deskripsi</label>
              <textarea name="caption" class="form-control" id="exampleFormControlInput1"  cols="2" rows="10" placeholder="Masukan Captions atau deskripsi"></textarea>
            </div>
            <div>
             <label for="exampleFormControlInput1">Upload File Sambutan (Doc/Pdf Max 2MB)</label>
             
           </div>
           <div class="form-group">
            <input type="file" name="path_sambutan" class="form-control-file" id="path_sambutan">
          </div>
          <br>
          <div class="modal-footer">
            <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
            <!-- <p id="demo"></p> -->
            <!-- <button type="button" onclick="getLocation()">Try It</button> -->
            <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<!-- END Modal Tambah -->


