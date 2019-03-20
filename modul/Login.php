<?php 
include 'koneksi/Database.php';
	/**
	 * 
	 */
	class Login extends Database
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function ceklogin($username,$password)
		{
			$conn = $this->koneksi;
			$query = mysqli_query($conn,"SELECT * from user where username='$username' and password='$password' ");
			$data = mysqli_fetch_array($query);
			$row = mysqli_num_rows($query);

			if ($row == 1) {
				session_start();
				$_SESSION['username'] = $data['username'];
				return true;
			}
			else{
				return false;
			}
		}
	}

 ?>