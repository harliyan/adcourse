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
        <h2 style="margin-top:0px">Kelas</h2>
        <div class="row" style="margin-bottom: 10px">
          <div class="col-md-4">
            <!-- <?php echo anchor(site_url('tb_kelola_kelas/create'),'Create', 'class="btn btn-primary"'); ?> -->
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
            <th>Kapasitas</th>
            <th>Jam Tersedia</th>
            <!--  <th>Action</th> -->
            </tr><?php
            foreach ($tb_kelola_kelas_data as $tb_kelola_kelas)
            {
              ?>
              <tr>
                <td width="80px"><?php echo ++$start ?></td>
                <td><?php echo $tb_kelola_kelas->kelas ?></td>
                <td><?php echo $tb_kelola_kelas->kapasitas ?></td>
                <td><?php echo $tb_kelola_kelas->jam_tersedia ?></td>

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


