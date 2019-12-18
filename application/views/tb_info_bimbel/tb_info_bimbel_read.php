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
        <h2 style="margin-top:0px">Tb_info_bimbel Read</h2>
        <table class="table">
	    <tr><td>Bimbel</td><td><?php echo $bimbel; ?></td></tr>
	    <tr><td>Materi</td><td><?php echo $materi; ?></td></tr>
	    <tr><td>Tryout</td><td><?php echo $tryout; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tb_info_bimbel') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>