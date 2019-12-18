    <style type="text/css">
      .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        pointer-events: auto;
        content: "";
        background-color: rgba(0, 0, 0, 0);
      }
    </style>

    <div class="wrapper">
      <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
          <div class="col-sm-12">
            <div class="page-title-box">
              <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                  <li class="breadcrumb-item"><a href="../">Home</a></li>
                  <li class="breadcrumb-item">File Sambutan</li>
                </ol>
              </div>
              <h4 class="page-title">Dokumentasi File Sambutan</h4>
            </div>
          </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="pt-3 pb-4">
              <form method="post">
                <div class="input-group">
                  <input class="form-control" type="text" placeholder="Cari Sambutan . . ." aria-label="Search" name="keyword">
                  <div class="input-group-append">
                    <button type="submit" name="search" value="search" class="btn waves-effect waves-light btn-custom"><i class="fa fa-search mr-1"></i> Mulai</button>  <a class="btn btn-danger" href="<?php echo base_url('sambutan'); ?>" role="button"><i class="fa fa-refresh mr-1"></i>Refresh</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <?php
          $no = 1;
          foreach ($doc_sambutan as $data) : ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card-box">
                <center>
                  <h4 class="header-title"><?php echo $data->judul; ?></h4>
                </center>
                 <p class="mt-2"><?php echo substr ($data -> caption, 0, 200); ?>.</p>
                <!-- <p><?php echo $data->caption; ?></p> -->
                <a class="btn btn-warning btn-sm" href="<?php echo base_url() ?>sambutan/details/<?php echo $data->id ?>">Details</a>
              </div>
            </div>
          <?php endforeach ?>

        </div>
      </div>
    </div>
    </div>
    <!-- end row -->


    <div class="row">
      <div class="col">
        <!--Tampilkan pagination-->
        <?php echo $pagination; ?>
      </div>
    </div>
    <br>

    <!-- end row -->
    </div>
    <!-- end row -->

    </div> <!-- end container -->

    <!-- Signup modal content -->
    <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <h2 class="text-uppercase text-center m-b-30">
            </h2>
            <form class="form-horizontal" action="#">
              <div class="form-group m-b-25">
                <div class="col-12">
                  <center><label for="emailaddress1">Masukan NIK untuk Download</label></center>
                  <input class="form-control" type="number" id="emailaddress1" required="" placeholder="332511040578XX">
                </div>
              </div>

              <div class="form-group account-btn text-center m-t-10">
                <div class="col-12">
                  <!--    <a class="btn w-lg btn-rounded btn-custom waves-effect waves-light" href="<?php print base_url('download/'); ?>Laporan Telecenter Kota Pekalongan.pdf"> -->
                  <a class="btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit" href="<?php print base_url('file_sambutan/'); ?><?php echo $data->path_sambutan; ?>">Download</a>
                </div>
              </div>

            </form>

          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->