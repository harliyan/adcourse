

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
        <form class="form-horizontal" action="<?php echo site_url(). '/superadmin/input_sambutan/update'; ?>" role="form" method="post"> 
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>ID Sambutan</b></a>
             <input type="text" class="form-control" name="id" placeholder="ID Desa" value="<?php echo $data->id ?>" readonly>
             <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Judul Sambutan</b></a>
             <input type="text" class="form-control" name="judul" placeholder="ID Desa" value="<?php echo $data->judul ?>">
             <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Caption Sambutan</b></a>
             <textarea class="form-control" name="caption"  cols="2" rows="10" placeholder="Enter ..."><?php echo $data->caption ?></textarea>
           </div>
           <br> 
           <div class="col-lg-6 col-md-6 col-sm-6">
             <a class="navbar-brand" href="#pablo" style="color: #1d1124"><b>Path Sambutan</b></a>
             <input type="text" class="form-control" name="path_sambutan"  value="<?php echo $data->path_sambutan ?>" readonly>
           <br>
             <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
             <a class="btn btn-danger" href="<?php echo base_url() ?>superadmin/input_sambutan">Batal</a>
          </div>
        </form>
      <?php } ?>
    </section>
  </div>
