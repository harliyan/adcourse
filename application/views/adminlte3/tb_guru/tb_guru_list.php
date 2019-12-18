<div class="container">
    <br>
    <br>
    <br>
        <h2 style="margin-top:0px">Tabel Guru</h2>
        <br>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('admin/tb_guru/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No Hp</th>
		<th>Action</th>
            </tr><?php
            foreach ($tb_guru_data as $tb_guru)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $tb_guru->nama ?></td>
			<td><?php echo $tb_guru->alamat ?></td>
			<td><?php echo $tb_guru->no_hp ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('admin/tb_guru/read/'.$tb_guru->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('admin/tb_guru/update/'.$tb_guru->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('admin/tb_guru/delete/'.$tb_guru->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
               </div>
            </div>
        </div>
    </div>
</div>