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
        <h2 style="margin-top:0px">Guru</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <!-- <?php echo anchor(site_url('tb_guru/create'),'Create', 'class="btn btn-primary"'); ?> -->
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('tb_guru/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('tb_guru'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <!-- <th>Action</th> -->
            </tr><?php
            foreach ($tb_guru_data as $tb_guru)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $tb_guru->nama ?></td>
            <td><?php echo $tb_guru->alamat ?></td>
            <td><?php echo $tb_guru->no_hp ?></td>
           <!--  <td style="text-align:center" width="200px">
                <?php 
                echo anchor(site_url('tb_guru/read/'.$tb_guru->id),'Read'); 
                echo ' | '; 
                echo anchor(site_url('tb_guru/update/'.$tb_guru->id),'Update'); 
                echo ' | '; 
                echo anchor(site_url('tb_guru/delete/'.$tb_guru->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
    </body>
</html>