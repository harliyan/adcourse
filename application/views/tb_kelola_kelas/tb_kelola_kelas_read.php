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
        <h2 style="margin-top:0px">Tb_kelola_kelas Read</h2>
        <table class="table">
	    <tr><td>Kapasitas</td><td><?php echo $kapasitas; ?></td></tr>
	    <tr><td>Jam Tersedia</td><td><?php echo $jam_tersedia; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tb_kelola_kelas') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>