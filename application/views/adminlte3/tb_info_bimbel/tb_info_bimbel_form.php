<div class="container">
    <br>
    <br>
    <br>
        <h2 style="margin-top:0px">Tb_info_bimbel <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Bimbel <?php echo form_error('bimbel') ?></label>
            <input type="text" class="form-control" name="bimbel" id="bimbel" placeholder="Bimbel" value="<?php echo $bimbel; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Materi <?php echo form_error('materi') ?></label>
            <input type="text" class="form-control" name="materi" id="materi" placeholder="Materi" value="<?php echo $materi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tryout <?php echo form_error('tryout') ?></label>
            <input type="text" class="form-control" name="tryout" id="tryout" placeholder="Tryout" value="<?php echo $tryout; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_info_bimbel') ?>" class="btn btn-danger">Cancel</a>
	</form>
    </body>
</div>
</div>
</div>
</div>
</div>
