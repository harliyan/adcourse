<div class="container">
    <br>
    <br>
    <br>
    <h2 style="margin-top:0px">Tb_kelola_kelas <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
    <div class="form-group">
        <label for="varchar">Kelas <?php echo form_error('kelas') ?></label>
        <input type="text" class="form-control" name="kelas" id="kelas" placeholder="kelas" value="<?php echo $kelas; ?>" />
    </div>
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
    <a href="<?php echo site_url('admin/tb_kelola_kelas') ?>" class="btn btn-default">Cancel</a>
</form>
</body>
</div>
</div>
</div>
</div>
</div>
