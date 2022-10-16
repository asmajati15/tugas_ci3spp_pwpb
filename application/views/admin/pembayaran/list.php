<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>

	<link rel="stylesheet" href="asset/bootstrap/bootstrap.min.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
	<script src="asset/bootstrap/bootstrap.min.js" defer></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css"/>
 
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>

	<style>
		@import url("https://unpkg.com/@webpixels/css@1.1.5/dist/index.css");

		/* Bootstrap Icons */
		@import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");

	</style>

</head>

<body>
	<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
		<!-- Vertical Navbar -->
		<nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-light border-bottom border-bottom-lg-0 border-end-lg"
			id="navbarVertical">
			<div class="container-fluid">
				<!-- Toggler -->
				<button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse"
					data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- Brand -->
				<a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
					<img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="...">
				</a>
				<!-- User menu (mobile) -->
				<div class="navbar-user d-lg-none">
					<!-- Dropdown -->
					<div class="dropdown">
						<!-- Toggle -->
						<a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							<div class="avatar-parent-child">
								<img alt="Image Placeholder"
									src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
									class="avatar avatar- rounded-circle">
								<span class="avatar-child avatar-badge bg-success"></span>
							</div>
						</a>
						<!-- Menu -->
						<div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
							<a href="#" class="dropdown-item">Profile</a>
							<a href="#" class="dropdown-item">Settings</a>
							<a href="#" class="dropdown-item">Billing</a>
							<hr class="dropdown-divider">
							<a href="#" class="dropdown-item">Logout</a>
						</div>
					</div>
				</div>
				<!-- Collapse -->
				<div class="collapse navbar-collapse" id="sidebarCollapse">
					<!-- Navigation -->
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('/') ?>">
								<i class="bi bi-house"></i> Dashboard
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('siswa') ?>">
								<i class="bi bi-people"></i> Siswa
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('kelas') ?>">
								<i class="bi bi-book"></i> Kelas
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('petugas') ?>">
								<i class="bi bi-person"></i> Petugas
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('pembayaran') ?>">
								<i class="bi bi-cash"></i> Pembayaran
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo site_url('spp') ?>">
								<i class="bi bi-receipt"></i> SPP
							</a>
						</li>
					</ul>
					<!-- Divider -->
					<hr class="navbar-divider my-5 opacity-20">
					<!-- Push content down -->
					<div class="mt-auto"></div>
					<!-- User (md) -->
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="bi bi-person-square"></i> Account
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('login/logout'); ?>">
								<i class="bi bi-box-arrow-left"></i> Logout
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- Main content -->
		<div class="h-screen flex-grow-1 overflow-y-lg-auto">
			<!-- Header -->
			<header class="bg-surface-primary border-bottom pt-6">
				<div class="container-fluid">
					<div class="mb-npx">
						<div class="row align-items-center">
							<div class="col-sm-6 col-12 mb-4 mb-sm-4">
								<!-- Title -->
								<h1 class="h2 mb-0 ls-tight">Aplikasi SPP</h1>
							</div>
							<!-- Actions -->
							<div class="col-sm-6 col-12 text-sm-end">
								<div class="mx-n1">
									<a href="<?php echo site_url('pembayaran/add') ?>" class="btn d-inline-flex btn-sm btn-primary mx-1">
										<span class=" pe-2">
											<i class="bi bi-plus"></i>
										</span>
										<span>Create</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- Main -->
			<main class="py-6 bg-surface-secondary">
				<div class="container-fluid">
					<div class="card mb-7">
						<div class="card-header">
							<h5 class="mb-0">Pembayaran</h5>
						</div>
						<div class="table">
							<table id="list" class="table table-hover table-nowrap">
								<thead class="table-light">
									<tr>
										<th scope="col">Nama Petugas</th>
										<th scope="col">Nama Siswa</th>
										<th scope="col">Tanggal Bayar</th>
										<th scope="col">Jumlah Bayar</th>
										<th scope="col">Nominal</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
                                    <?php foreach ($pembayarans as $pembayaran): ?>
									<tr>
										<td>
											<a class="text-heading font-semibold" href="<?php echo site_url('petugas') ?>">
												<?php echo $pembayaran->nama_petugas ?>
											</a>
										</td>
										<td>
											<a class="text-heading font-semibold" href="<?php echo site_url('siswa') ?>">
												<?php echo $pembayaran->nama ?>
											</a>
										</td>
										<td>
											<?php echo $pembayaran->tanggal_bayar ?>
										</td>
										<td>
											<?php echo $pembayaran->jumlah_bayar ?>
										</td>
										<td>
											<a class="text-heading font-semibold" href="<?php echo site_url('spp') ?>">
												<?php echo $pembayaran->nominal ?>
											</a>
										</td>
										<td class="text-end">
											<a href="<?php echo site_url('pembayaran/edit/'.$pembayaran->id_pembayaran) ?>" class="btn btn-sm btn-square btn-neutral"><i class="bi bi-pencil"></i></a>
											<a onclick="return confirm('Are you sure you want to delete this item?');"
											 href="<?php echo site_url('pembayaran/delete/'.$pembayaran->id_pembayaran) ?>" class="btn btn-sm btn-square btn-neutral text-danger-hover"><i class="bi bi-trash"></i></a>
										</td>
									</tr>
                                    <?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>

	<script>
		$(document).ready(function () {
		$('#list').DataTable();
	});
	</script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
</body>

</html>
