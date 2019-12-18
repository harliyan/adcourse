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
    <span class="text-uppercase page-subtitle">Siap kawal</span>
    <h1 class="page-title">INPUT DATA FOTO</h1>
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
<div class="row">
  <div class="col-lg-6">
    <div class="card mb-4">
      <div class="card-body">
        <p class="card-text">Upload Foto Walikota Kota Pekalongan ke Google Photos</p>
       <a href="https://photos.google.com/albums" class="btn btn-danger" role="button" target="_blank">Upload Foto ke Google Photos</a>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card mb-4">
      <div class="card-body">
        <p class="card-text">Masukan Deskripsi Kegiatan Walikota Kota Pekalongan</p>
        <button type="button" data-toggle="modal" data-target="#tambah-data" class="btn btn-info" class="glyphicon glyphicon-repeat">Tambah Foto dan Deskripsi</button>
      </div>
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
              <th style="text-align: center;">Judul Foto</th>
              <th style="text-align: center;">Caption Foto</th>
              <th style="text-align: center;">Type</th>
              <th style="text-align: center;">Image</th>
              <th style="text-align: center;" width="160px">Aksi</th>


            </tr>
          </thead>

                    <tbody>
            <?php 
            $no=1;
            foreach ($doc_foto as $data)
              : ?>
            <tr>
              <td style="text-align: center;"><?php echo $no++; ?></td>
              <td style="text-align: center;"><?php echo $data -> judul; ?></td>
              <td style="text-align: center;"><?php echo $data -> caption; ?></td>
              <td style="text-align: center;"><?php echo $data -> image_type; ?></td>
                 <td style="text-align: center;"><a href="<?php echo base_url('uploads/'. $data -> image_name); ?>" data-lightbox="image-1" data-title="<?php echo $data -> judul; ?>" ><img src="<?php echo base_url('uploads/'. $data -> image_name); ?>" class="img-thumbnail" style="width:100px; height:auto;" alt="Responsive image" ></a></td>
              <td style="text-align: center;">
                <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>superadmin/input_foto/edit/<?php echo $data->id ?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>superadmin/input_foto/hapus/<?php echo $data->id ?>" onclick="return confirm('Yakin ingin menghapus?')" >Delete</a>
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
          <h4 class="modal-title text-center">Form Input Foto</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url('admin/input_foto/tambah_aksi')?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleFormControlInput1">Judul Foto</label>
              <input type="text" class="form-control" name="judul" placeholder="Masukan Judul Foto" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Deskripsi Foto</label>
              <textarea name="caption" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Deskripsi Foto"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Google Photo Link </label>
              <textarea name="google_photo_link" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Link Google Foto Acara"></textarea>
            </div>
            <label for="exampleFormControlInput1">Foto Tumbnail (Max 4MB)</label>
            <div class="col-sm">
             <!-- <label for="exampleFormControlInput1">Keterangan Tambahan</label> -->
             <div class="row">
              <div class="col-sm">
                <div class="form-group">
                  <!-- <label for="exampleFormControlFile1">Foto PC</label> -->
                  <input type="file" name="path_foto" class="form-control-file" id="path_foto">
                </div>
              </div>
            </div>
          </div>
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

