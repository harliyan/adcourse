<?php   //privilege
print_data('get_where', array('users', array('id_user'=>$this->session->userdata('id'))), 'privilege') == 'admin';
$cetak = print_data('get_where', array('users', array('id_user'=>$this->session->userdata('id'))), 'privilege');

?>

<!-- Main Sidebar -->
<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
  <div class="main-navbar">
    <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
      <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
        <div class="d-table m-auto">
         <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="<?php print base_url('Shards-Dashboard/'); ?>images/avatars/pekalongan.PNG">
         <span class="d-none d-md-inline ml-1">SIAP KAWAL</span>
       </div>
     </a>
     <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
      <i class="material-icons">&#xE5C4;</i>
    </a>
  </nav>
</div>
<form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
  <div class="input-group input-group-seamless ml-3">
    <div class="input-group-prepend">
      <div class="input-group-text">
        <i class="fas fa-search"></i>
      </div>
    </div>
    <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
  </form>
  <div class="nav-wrapper">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="home">
          <i class="material-icons">apps</i>
          <span>Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="input_foto">
          <i class="material-icons">add_a_photo</i>
          <span>Input Foto</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="input_video">
          <i class="material-icons">add_circle_outline</i>
          <span>Input Video</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="input_file  ">
          <i class="material-icons">add_to_photos</i>
          <span>Input File</span>
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="input_sambutan  ">
          <i class="material-icons">view_module</i>
          <span>Input Sambutan</span>
        </a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="material-icons">note_add</i>
          <span>Report</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="all3">Report Foto</a>
          <a class="dropdown-item" href="all">Report Sambutan</a>
          <a class="dropdown-item" href="all2">Report File</a>
         
        </div>
      </li>

      <?php if ($cetak == "superadmin") {
        echo ' <li class="nav-item"  style="color:red">
        <a class="nav-link  " href="verifikasi"  style="color:red">
        <i class="material-icons">vertical_split</i>
        <span>Verifikasi Data</span>
        </a>
        </li>';
      } ?>

        <?php if ($cetak == "superadmin") {
        echo ' <li class="nav-item">
        <a class="nav-link  " href="admin_user">
        <i class="material-icons">vertical_split</i>
        <span>Users</span>
        </a>
        </li>';
      } ?>

      <li class="nav-item">
        <a class="nav-link " href="about">
          <i class="material-icons">view_module</i>
          <span>About</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
<!-- End Main Sidebar -->



<!--     <?php if(!($admin -> privilege == "admin" or $admin -> privilege == "Admin")){ echo '<a class="btn btn-danger btn-sm" href="'.base_url().'admin/admin/delete_admin/'.$admin->id_user.'">Delete</a> ';}?> -->


<!-- <?php if(!($admin -> privilege == "admin" or $admin -> privilege == "Admin")){ echo '<a class="btn btn-danger btn-sm" href="">Delete</a> ';}?> -->
