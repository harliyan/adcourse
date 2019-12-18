    <!doctype html>
    
    <html class="no-js h-100" lang="en">

    <?php $this->load->view('adminlte3/global/head'); ?>

    <body class="h-100">

     <?php $this->load->view('adminlte3/global/setting'); ?>

     <div class="container-fluid">
      <div class="row">

       <?php $this->load->view('adminlte3/sidebar/'.$sidebar.''); ?>

       <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
        <div class="main-navbar sticky-top bg-white">
          <!-- Main Navbar -->

          <?php $this->load->view('adminlte3/global/main_navbar'); ?>


          <div class="main-content-container container-fluid px-4">
            
            <?php $this->load->view('adminlte3/'.$active_controller.'/'.$active_function); ?>

            <div class="row">
            </div>
          </div>
          <?php $this->load->view('adminlte3/global/footer'); ?>
        </main>
      </div>
    </div>
    <?php $this->load->view('adminlte3/global/popup'); ?>
    <?php $this->load->view('adminlte3/global/javascript'); ?>
  </body>
  </html>
