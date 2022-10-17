<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login or Signup</title>
	<link rel="stylesheet" href="asset/bootstrap/bootstrap.min.css">
	<script src="asset/bootstrap/bootstrap.min.js" defer></script>
	<link rel="stylesheet" href="asset/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<style>
		@import url("https://unpkg.com/@webpixels/css@1.1.5/dist/index.css");

		/* Bootstrap Icons */
		@import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");

	</style>
</head>

<body>
	<div class="px-5 py-5 p-lg-0 bg-surface-secondary">
		<div class="d-flex justify-content-center">
			<div
				class="col-lg-5 col-xl-4 p-12 p-xl-20 position-fixed start-0 top-0 h-screen overflow-y-hidden bg-primary d-none d-lg-flex flex-column">
				<!-- Logo -->
				<a class="d-block h-50" href="#">
					<img src="<?php echo base_url().'asset/img/logosmkn4.png'?>" class="h-50" alt="...">
				</a>
				<!-- Title -->
				<div class="mt-2">
					<h1 class="ls-tight font-bolder display-6 text-white mb-5">
						Aplikasi SPP SMKN 4 Bogor
					</h1>
					<p class="text-white text-opacity-75">
						Hadir untuk memudahkan dalam proses pembayaran SPP.
					</p>
				</div>
			</div>
			<div
				class="col-12 col-md-9 col-lg-7 offset-lg-5 border-left-lg min-h-lg-screen d-flex flex-column justify-content-center py-lg-16 px-lg-20 position-relative">
				<div class="row">
					<div class="col-lg-10 col-md-9 col-xl-6 mx-auto ms-xl-0">
						<div class="mt-10 mt-lg-5 mb-6 d-flex align-items-center d-lg-block">
							<span class="d-inline-block d-lg-block h1 mb-lg-6 me-3">👋</span>
							<h1 class="ls-tight font-bolder h2">
								Selamat Datang!
							</h1>
						</div>
						<form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">
							<div class="mb-5">
								<label class="form-label" for="username">Username</label>
								<input type="text" class="form-control form-control-muted" id="username" name="username" placeholder="user.name">
							</div>
							<div class="mb-5">
								<label class="form-label" for="password">Password</label>
								<input type="password" class="form-control form-control-muted" id="password" name="password" placeholder="********"
									autocomplete="current-password">
							</div>
							<div class="mb-5">
							</div>
							<div>
								<button type="submit" class="btn btn-primary w-full" value="Login">
									Sign in
								</button>
							</div>
						</form>
						<div class="my-6">
							<small>Don't have an account?</small>
							<a href="#" class="text-warning text-sm font-semibold">Sign up</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
