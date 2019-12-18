<div class="container">
    <br>
    <br>
    <br>
        <h2 style="margin-top:0px">Tb_siswa <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jurusan <?php echo form_error('jurusan') ?></label>
            <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" value="<?php echo $jurusan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Asal Sekolah <?php echo form_error('asal_sekolah') ?></label>
            <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah" value="<?php echo $asal_sekolah; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('admin/tb_siswa') ?>" class="btn btn-danger">Cancel</a>
	</form>
    </body>
</div>
</div>
</div>
</div>
</div>