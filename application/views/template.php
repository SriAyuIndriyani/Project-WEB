<?php $base_url = base_url() . 'assets/' ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Politeknik Kampar</title>
	<!-- Favicon -->
	<link rel="icon" href="<?= base_url('assets/img/logopolkam.png') ?>" type="jpg/png">
	<!-- start of file stylesheet.php -->
	<?php include_once "template/stylesheet.php" ?>
	<!-- end of filele stylesheet.php -->

	<style>
		.btn-custom {
			width: 80px;
		}
	</style>

</head>

<body id="page-top" style="font-family: 'Courier New', Courier, monospace;">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<?php include_once "template/sidebar.php" ?>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<center>
					<?php include_once "template/header.php" ?>
				</center>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<?php $this->load->view($pages) ?>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-info text-light">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; SAIY 2023</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Yakin Untuk Keluar?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Silahkan pilih "Logout" Jika Ingin Keluar...</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="<?= base_url() ?>auth/logout">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<?php include_once "template/javascript.php" ?>

</body>

</html>