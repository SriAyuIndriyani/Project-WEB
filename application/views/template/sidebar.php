<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<center style="margin-top: 20px;">
		<img class="img-profile rounded-circle" src="<?= $base_url ?>img/pinguin.png" style="max-width: 50%;">
		<br>
		<span class="mr-2 d-none d-lg-inline small text-light">
			<?= $this->session->userdata('username') ?>
		</span>
	</center>
	<!-- Divider -->
	<hr class="sidebar-divider">
	<!-- Heading -->
	<div class="sidebar-heading">
		Interface
	</div>

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url() ?>dashboard">
			<span>Dashboard</span>
		</a>
	</li>
	<!-- Divider -->
	<hr class="sidebar-divider">
	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url() ?>admin/user">
			<span>User Management</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url() ?>project/data_dosen/dosen">
			<span>Data Dosen</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url() ?>project/data_mahasiswa/mahasiswa">
			<span>Data Mahasiswa</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url() ?>project/data_kepalaprodi/kepalaprodi">
			<span>Data Kepala Program Studi</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url() ?>project/data_prodi/prodi">
			<span>Data Program Studi</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url() ?>project/data_semester/semester">
			<span>Data Semester</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url() ?>project/data_kelas/kelas">
			<span>Data Kelas</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item active">
		<a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
			Logout
		</a>
	</li>



	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline" style="margin-top: 10px;">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

	<!-- Sidebar Message -->
</ul>