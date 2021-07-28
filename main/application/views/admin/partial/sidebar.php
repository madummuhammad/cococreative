<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">Cococreative</div>
	</a>
	<!-- Divider -->
	<hr class="sidebar-divider my-0">
	<!-- Nav Item - Dashboard -->
	<li class="nav-item <?php if ($this->uri->segment(1)=='' AND $this->uri->segment(2) != 'user' OR $this->uri->segment(1)=='admin' AND $this->uri->segment(2) != 'user' OR $this->uri->segment(1)=='Admin' AND $this->uri->segment(2) != 'user'): ?>
	<?php echo 'active' ?>
	<?php endif ?>">
	<a class="nav-link" href="<?php echo base_url('Admin') ?>">
		<i class="fas fa-fw fa-tachometer-alt"></i>
		<span>Dashboard</span></a>
	</li>
	<!-- Divider -->
	<hr class="sidebar-divider">
	<!-- Heading -->
	<div class="sidebar-heading">
		Website
	</div>
	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="<?php echo base_url('website') ?>" target="_blank">
			<i class="fas fa-fw fa-wrench"></i>
			<span>Atur Tampilan</span>
		</a>
	</li>
	<!-- Nav Item - Utilities Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link collapsed" href="https://cococreative-indonesia.com" target="_blank">
			<i class="fas fa-globe"></i>

			<span>Lihat Website</span>
		</a>
		<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
		data-parent="#accordionSidebar">
		<div class="bg-white py-2 collapse-inner rounded">
			<h6 class="collapse-header">Custom Utilities:</h6>
			<a class="collapse-item" href="utilities-color.html">Colors</a>
			<a class="collapse-item" href="utilities-border.html">Borders</a>
			<a class="collapse-item" href="utilities-animation.html">Animations</a>
			<a class="collapse-item" href="utilities-other.html">Other</a>
		</div>
	</div>
</li>
<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
	Produk
</div>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item <?php if ($this->uri->segment(1)=='produk' AND $this->uri->segment(2) != 'tambah_produk'): ?>
<?php echo 'active' ?>
<?php endif ?>">
<a class="nav-link collapsed " href="<?php echo base_url('produk') ?>">
	<i class="fas fa-fw fa-folder"></i>
	<span>Data Produk</span>
</a>
</li>
<li class="nav-item <?php if ($this->uri->segment('2')=='tambah_produk'): ?>
<?php echo 'active' ?>
<?php endif ?>">
<a class="nav-link collapsed " href="<?php echo base_url('produk/tambah_produk') ?>">
	<i class="fas fa-folder-plus"></i>
	<span>Tambah Produk</span>
</a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
	Berita
</div>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item <?php if ($this->uri->segment(1)=='berita' AND $this->uri->segment(2) != 'tambah_berita'): ?>
<?php echo 'active' ?>
<?php endif ?>">
<a class="nav-link collapsed " href="<?php echo base_url('berita') ?>">
	<i class="fas fa-fw fa-folder"></i>
	<span>Daftar Berita</span>
</a>
</li>

<li class="nav-item <?php if ($this->uri->segment(2)=='tambah_berita' AND $this->uri->segment(2) != 'berita'): ?>
<?php echo 'active' ?>
<?php endif ?>">
<a class="nav-link collapsed " href="<?php echo base_url('berita/tambah_berita') ?>">
	<i class="fas fa-fw fa-folder"></i>
	<span>Tambah Berita</span>
</a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
	User
</div>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item <?php if ($this->uri->segment('2')=='user'): ?>
<?php echo 'active' ?>
<?php endif ?>">
<a class="nav-link collapsed " href="<?php echo base_url('admin/user') ?>">
	<i class="fas fa-users"></i>
	<span>Data User</span>
</a>
</li>
<li class="nav-item <?php if ($this->uri->segment('1')=='pesan'): ?>
<?php echo 'active' ?>
<?php endif ?>">
<a class="nav-link collapsed " href="<?php echo base_url('pesan') ?>">
	<i class="fas fa-envelope fa-fw"></i>
	<span>Pesan</span>
</a>
</li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">
<!-- Nav Item - Pages Collapse Menu -->
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
	<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>
<!-- End of Sidebar -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content -->
	<div id="content">