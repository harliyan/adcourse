<div class="container">
    <br>
    <br>
    <br>
        <h2 style="margin-top:0px">Kelola Jadwal <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Kelas <?php echo form_error('kelas') ?></label>
            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Jam Bimbingan" value="<?php echo $kelas; ?>" />
        </div>
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
	    <a href="<?php echo site_url('admin/tb_kelola_jadwal') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</div>
</div>
</div>
</div>
</div>
