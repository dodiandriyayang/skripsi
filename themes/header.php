<?php 
	session_start();
	if ($_SESSION['username'] == '') {
		echo "<script>alert('Anda harus masuk dulu');
				document.location.href='index.php';</script>";
	};
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>

	<!-- Scripts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>

	<!-- Font Awesome -->

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-md navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="">
					KOMUNITAS
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">

					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="">Anggota</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Artikel.php">Artikel</a>
						</li>
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><?php echo $_SESSION['username']; ?><span class="caret"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="login.php?aksi=keluar">Keluar
							</a>
							<form id="logout-form" action="" method="POST" style="display: none;">
								
							</form>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
</div>