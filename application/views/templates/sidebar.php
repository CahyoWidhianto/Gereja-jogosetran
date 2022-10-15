 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center">
         <div class="sidebar-brand-icon">
             <img src="<?= base_url('/assets/img/Logo/Logo.png') ?>" class="img-circle elevation-2" width="40" height="43">
         </div>
         <div class="sidebar-brand-text mx-3">Jogosetran Admin </div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Admin
     </div>

     <!-- Nav Item - Dashboard -->
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('user/dashboard'); ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Kelola Data
     </div>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('user/profileAdmin'); ?>">
             <i class="fas fa-fw fa-user"></i>
             <span>Profil Admin</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('datagereja/index') ?>">
             <i class="fas fa-fw fa-church"></i>
             <span>Kelola data Gereja</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('profile/index'); ?>">
             <i class="fas fa-users"></i>
             <span>Kelola Profil Gembala</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('pengumuman/index'); ?>">
             <i class="fas fa-bullhorn"></i>
             <span>Kelola Pengumuman</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('warta/index'); ?>">
             <i class="fas fa-book-open"></i>
             <span>Kelola Warta</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('dokumen/index') ?>">
             <i class="fas fa-folder-open"></i>
             <span>Kelola Dokumen</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('uploadgambar/index') ?>">
             <i class="fa fa-images"></i>
             <span>Galeri</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('jadwalpelayanan/index') ?>">
             <i class="fas fa-clipboard-list"></i>
             <span>Kelola Jadwal Pelayanan</span></a>
     </li>

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('tema/index') ?>">
             <i class="fa fa-palette"></i>
             <span>Kelola Tema</span></a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('sosmed/index') ?>">
             <i class="far fa-bell"></i>
             <span>Kelola Sosial Media</span></a>
     </li>
     <!-- Divider -->
     <hr class="sidebar-divider">

     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
             <i class="fas fa-sign-out-alt fa-fw "></i>
             <span>Logout</span>
         </a>
     </li>




     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->