  <div class="wrapper">
    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <div class="btn-group float-right">
              <ol class="breadcrumb hide-phone p-0 m-0">
              </ol>
          </div>
      </div>
  </div>
</div>
<!-- end page title end breadcrumb -->
<div class="container-fluid">
    <h2 style="margin-top:0px">Jadwal</h2>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-4">
            <!-- <?php echo anchor(site_url('tb_kelola_jadwal/create'),'Create', 'class="btn btn-primary"'); ?> -->
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
            <th>Kelas</th>
            <th>Jam Bimbingan</th>
            <th>Jumlah Siswa</th>
            <th>Hari Bimbingan</th>
            <th>Mata Pelajaran</th>
            <!-- <th>Action</th> -->
            </tr><?php
            foreach ($tb_kelola_jadwal_data as $tb_kelola_jadwal)
            {
                ?>
                <tr>
                 <td width="80px"><?php echo ++$start ?></td>
                 <td><?php echo $tb_kelola_jadwal->kelas ?></td>
                 <td><?php echo $tb_kelola_jadwal->jam_bimbingan ?></td>
                 <td><?php echo $tb_kelola_jadwal->jumlah_siswa ?></td>
                 <td><?php echo $tb_kelola_jadwal->hari_bimbingan ?></td>
                 <td><?php echo $tb_kelola_jadwal->mata_pelajaran ?></td>
			<!-- <td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('tb_kelola_jadwal/read/'.$tb_kelola_jadwal->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('tb_kelola_jadwal/update/'.$tb_kelola_jadwal->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('tb_kelola_jadwal/delete/'.$tb_kelola_jadwal->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td> -->
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
<br>
</div>
</div>
</div>
</div>
</div>
</div>
