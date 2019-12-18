

<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-12 text-center text-sm-left mb-0">


    <span class="text-uppercase page-subtitle">EDIT</span>
    <h1 class="page-title">UBAH DATA SIAP KAWAL</h1>
  </div>
</div>
<!-- End Page Header -->
<div class="card-header">
  <section class="content">

   <?php foreach($tb_telecenter as $data){ ?>

    <div class="card-body">
      <div class="tab-content">
        <form class="form-horizontal" action="<?php echo site_url(). '/admin/input_foto/update'; ?>" role="form" method="post"> 
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
             <a href="<?php echo base_url('uploads/'. $data -> image_name); ?>" data-lightbox="image-1" data-title="<?php echo $data -> judul; ?>" ><img src="<?php echo base_url('uploads/'. $data -> image_name); ?>" class="img-thumbnail" alt="Responsive image" ></a>
           </div>
           <br>
           <div class="col-lg-6 col-md-6 col-sm-6">
             <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>ID Foto</b></a>
             <input type="text" class="form-control" name="id" placeholder="ID Desa" value="<?php echo $data->id ?>" readonly>
             <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Judul Foto</b></a>
             <input type="text" class="form-control" name="judul" placeholder="ID Desa" value="<?php echo $data->judul ?>">
             <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Caption Foto</b></a>
             <input type="text" class="form-control" name="caption" placeholder="ID Desa" value="<?php echo $data->caption ?>">
             <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Image Name</b></a>
             <input type="text" class="form-control" name="image_name"  value="<?php echo $data->image_name ?>" readonly>
              <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Image Type</b></a>
             <input type="text" class="form-control" name="image_type" placeholder="ID Desa" value="<?php echo $data->image_type ?>" readonly>
             <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Image Size</b></a>
             <input type="text" class="form-control" name="image_size_str" placeholder="ID Desa" value="<?php echo $data->image_size_str ?>" readonly>
           
           <br>
             <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
             <a class="btn btn-danger" href="<?php echo base_url() ?>admin/input_foto">Batal</a>
          </div>
        </form>
      <?php } ?>
    </section>
  </div>
