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
        <h2 style="margin-top:0px">Tb_materi <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="timestamp">Date <?php echo form_error('date') ?></label>
            <input type="text" class="form-control" name="date" id="date" placeholder="Date" value="<?php echo $date; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Judul <?php echo form_error('judul') ?></label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Caption <?php echo form_error('caption') ?></label>
            <input type="text" class="form-control" name="caption" id="caption" placeholder="Caption" value="<?php echo $caption; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Path Sambutan <?php echo form_error('path_sambutan') ?></label>
            <input type="text" class="form-control" name="path_sambutan" id="path_sambutan" placeholder="Path Sambutan" value="<?php echo $path_sambutan; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_materi') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>