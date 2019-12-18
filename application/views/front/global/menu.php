 <div class="navbar-custom">
     <div class="container-fluid">
         <div id="navigation">
             <!-- Navigation Menu-->
             <ul class="navigation-menu">
                 <li class="has-submenu">
                     <a href="<?= site_url('kelola_kelas'); ?>"><i class="icon-speedometer"></i>Kelas</a>
                 </li>
                 <li class="has-submenu">
                     <a href="<?= site_url('kelola_jadwal'); ?>"><i class="icon-home"></i>Jadwal Kelas</a>

                 </li>
                 <li class="has-submenu">
                     <a href="<?= site_url('#'); ?>"><i class="icon-settings"></i>Info Bimbel</a>
                      <ul class="submenu">
                        <li><a href="<?= site_url('info_bimbel2'); ?>">Info Bimbingan Belajar</a></li>
                         <li><a href="<?= site_url('course'); ?>">Info Materi</a></li>
                         <li><a href="<?= site_url('tb_tryout'); ?>">Tryout</a></li>
                    </ul>
                 </li>
                  <li class="has-submenu">
                     <a href="<?= site_url('siswa'); ?>"><i class="icon-settings"></i>Siswa</a>
                 </li>
                  <li class="has-submenu">
                     <a href="<?= site_url('guru'); ?>"><i class="icon-settings"></i>Guru</a>
                 </li>
             </ul>
             <!-- End navigation menu -->
         </div> <!-- end #navigation -->
     </div> <!-- end container -->
 </div> <!-- end navbar-custom -->
 </header>
 <!-- End Navigation Bar-->