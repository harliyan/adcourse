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
        <h2 style="margin-top:0px">Tb_kelola_kelas <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Kapasitas <?php echo form_error('kapasitas') ?></label>
            <input type="text" class="form-control" name="kapasitas" id="kapasitas" placeholder="Kapasitas" value="<?php echo $kapasitas; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jam Tersedia <?php echo form_error('jam_tersedia') ?></label>
            <input type="text" class="form-control" name="jam_tersedia" id="jam_tersedia" placeholder="Jam Tersedia" value="<?php echo $jam_tersedia; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_kelola_kelas') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>