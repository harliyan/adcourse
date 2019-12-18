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
        <h2 style="margin-top:0px">Tb_kelola_jadwal Read</h2>
        <table class="table">
	    <tr><td>Jam Bimbingan</td><td><?php echo $jam_bimbingan; ?></td></tr>
	    <tr><td>Jumlah Siswa</td><td><?php echo $jumlah_siswa; ?></td></tr>
	    <tr><td>Hari Bimbingan</td><td><?php echo $hari_bimbingan; ?></td></tr>
	    <tr><td>Mata Pelajaran</td><td><?php echo $mata_pelajaran; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tb_kelola_jadwal') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>