<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tb_kelola_jadwal <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Jam Bimbingan <?php echo form_error('jam_bimbingan') ?></label>
            <input type="text" class="form-control" name="jam_bimbingan" id="jam_bimbingan" placeholder="Jam Bimbingan" value="<?php echo $jam_bimbingan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jumlah Siswa <?php echo form_error('jumlah_siswa') ?></label>
            <input type="text" class="form-control" name="jumlah_siswa" id="jumlah_siswa" placeholder="Jumlah Siswa" value="<?php echo $jumlah_siswa; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Hari Bimbingan <?php echo form_error('hari_bimbingan') ?></label>
            <input type="text" class="form-control" name="hari_bimbingan" id="hari_bimbingan" placeholder="Hari Bimbingan" value="<?php echo $hari_bimbingan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Mata Pelajaran <?php echo form_error('mata_pelajaran') ?></label>
            <input type="text" class="form-control" name="mata_pelajaran" id="mata_pelajaran" placeholder="Mata Pelajaran" value="<?php echo $mata_pelajaran; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_kelola_jadwal') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>