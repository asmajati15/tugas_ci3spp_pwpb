<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Siswa - Tambah</title>

	<link rel="stylesheet" href="asset/bootstrap/bootstrap.min.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
	<script src="asset/bootstrap/bootstrap.min.js" defer></script>

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
				<a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0 d-flex" style="width: 137px; height: 36px;" href="#">
					<img src="<?php echo base_url().'asset/img/logosmkn4.png'?>" alt="...">
					<h5 style="margin-left: 5px; align-items:center;">Aplikasi SPP</h5>
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
							<a class="nav-link" href="#">
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
                    <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                    <?php endif; ?>
					<div class="mb-npx">
						<div class="row align-items-center">
							<div class="col-sm-6 col-12 mb-4 mb-sm-4">
								<!-- Title -->
								<h1 class="h2 mb-0 ls-tight">Application</h1>
							</div>
							<!-- Actions -->
							<div class="col-sm-6 col-12 text-sm-end">
								<div class="mx-n1">
									<a href="<?php echo site_url('siswa') ?>" class="btn d-inline-flex btn-sm btn-primary mx-1">
										<span class=" pe-2">
											<i class="bi bi-arrow-left"></i>
										</span>
										<span>Back</span>
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
							<h5 class="mb-0">Form Add</h5></h5>
						</div>
						<div class="card-body">
                        <form action="<?php echo site_url('siswa/add') ?>" method="post" enctype="multipart/form-data" >
							
							<input type="hidden" name="id_siswa">


                            <div class="form-group mb-4">
								<label for="nisn">NISN</label>
								<input class="form-control <?php echo form_error('nisn') ? 'is-invalid':'' ?>"
								 type="number" name="nisn" min="0" placeholder="Example: 006321445" />
								<div class="invalid-feedback">
									<?php echo form_error('nisn') ?>
								</div>
							</div>

							<div class="form-group mb-4">
								<label for="nis">NIS</label>
								<input class="form-control <?php echo form_error('nis') ? 'is-invalid':'' ?>"
								 type="number" name="nis" min="0" placeholder="Example: 202013455" />
								<div class="invalid-feedback">
									<?php echo form_error('nis') ?>
								</div>
							</div>

                            <div class="form-group mb-4">
								<label for="nama">Nama</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Example: Farhan Kebab" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group mb-4">
								<label for="username">Username</label>
								<input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
								 type="text" name="username" min="0" placeholder="Example: farhan_kebab" />
								<div class="invalid-feedback">
									<?php echo form_error('username') ?>
								</div>
							</div>

							<div class="form-group mb-4">
								<label for="password">Password</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
								 type="password" name="password" min="0" placeholder="Example: ********" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>

							<input type="hidden" name="level" value="siswa">

                            <div class="form-group mb-4">
								<label for="id_kelas">Kelas</label>
								<select class="form-select <?php echo form_error('id_kelas') ? 'is-invalid':'' ?>"
									aria-label="Default select example" name="id_kelas">
									<option value="" hidden>--Pilih kelas--</option>
									<?php foreach ($kelass as $kelas): ?>
									<option value="<?php echo $kelas->id_kelas ?>"><?php echo $kelas->nama_kelas ?></option>
									<?php endforeach; ?>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('id_kelas') ?>
								</div>
							</div>

							<div class="form-group mb-4">
								<label for="alamat">Alamat</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								type="text" name="alamat" placeholder="Example: Jl. Hangar Straight, Silverstone" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group mb-4">
								<label for="no_telepon">No. Telepon</label>
								<input class="form-control <?php echo form_error('no_telepon') ? 'is-invalid':'' ?>"
								type="text" name="no_telepon" placeholder="Example: +62812345678" />
								<div class="invalid-feedback">
									<?php echo form_error('no_telepon') ?>
								</div>
							</div>

							<div class="form-group mb-4">
								<label for="id_spp">No. SPP</label>
								<select class="form-select <?php echo form_error('id_spp') ? 'is-invalid':'' ?>"
									aria-label="Default select example" name="id_spp">
									<option value="" hidden>--Pilih spp--</option>
									<?php foreach ($spps as $spp): ?>
									<option value="<?php echo $spp->id_spp ?>"><?php echo $spp->tahun_ajaran ?></option>
									<?php endforeach; ?>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('id_kelas') ?>
								</div>
							</div>

                            <div class="form-group mb-4">
                                <label for="gambar">Photo</label>
                                <input class="form-control-file" type="file" name="gambar" />
                            </div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
</body>

</html>
