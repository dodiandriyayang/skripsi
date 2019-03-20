<?php 
	include 'modul/Login.php';
	$login = new Login();
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	$aksi = $_GET['aksi'];
	switch ($aksi) {
		case 'masuk':
			$data = $login->ceklogin(
 				$username,
 				$password
			);
			if ($data) {
				header("location:index1.php");	
			}else{
				echo "<script>alert('gagal login');
				document.location.href='index.php';</script>";
			}
			break;
		case 'keluar':
			session_destroy();
			header("location:index.php");
			break;
		
		default:
			# code...
			break;
	}
 ?>