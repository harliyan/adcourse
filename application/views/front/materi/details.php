<style>
  .pdfobject-container { height: 30rem; border: 1rem solid rgba(0,0,0,.1); }
</style>

<div class="wrapper">
  <div class="container-fluid">
   <!-- Page-Title -->
   <div class="row">
    <div class="col-sm-12">
      <div class="page-title-box">
        <div class="btn-group float-right">
          <ol class="breadcrumb hide-phone p-0 m-0">
            <li class="breadcrumb-item"><a href="../../">Home</a></li>
            <li class="breadcrumb-item"><a href="../">Materi</a></li>
            <li class="breadcrumb-item">Details</li>
          </ol>
        </div>
        <h4 class="page-title">Materi</h4>
      </div>
    </div>
  </div>
  <!-- end page title end breadcrumb -->
  <div class="row">
   <?php 
   foreach ($tb_doc_sambutan as $data)
    : ?>
  <div class="col">
    <div class="card-box">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <div id="example1"></div>
            <br>
          </div>
          <div class="col-sm">
            <h4 class="header-title">JUDUL :</h4>
            <p><?php echo $data -> judul; ?></p>
            <h4 class="header-title">CAPTION :</h4>
            <p><?php echo $data -> caption; ?></p>
            <br>
            <br>
           <a  download="Materi" class="btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit" href="<?php echo base_url() ?>materi/<?php echo $data->path_sambutan ?>">Download</a>

          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div> 
</div> 
</div> 
</div>
</div>
</div>
</div>
</div>


<script src="<?php print base_url('pdfobject'); ?>/pdfobject.js"></script>
<script>PDFObject.embed("<?php print base_url('materi'); ?>/<?php echo $data -> path_sambutan; ?>", "#example1");</script>
<script type="text/javascript">
  $(function () {
    document.addEventListener("pagerendered", function (e) {
      $('#print').hide();
      $('#viewBookmark').hide();
      $('#openFile').hide();
    });
  });

  function checkLength(el) {
    if (el.value.length != 16) {
      alert("NIK harus berisi 16 digit angka")
    }
  }
</script>
