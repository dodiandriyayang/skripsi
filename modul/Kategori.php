<?php 
	include 'koneksi/Database.php';

	/**
	 * 
	 */
	class Kategori extends Database
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function tampildata()
		{
			$query = $this->koneksi->query("SELECT * FROM kategori");
			if ($query==false) {
				return false;
			}
			$tampil = array();
			while ($row = $query->fetch_assoc()) {
				$tampil[]=$row;
			}
			return $tampil;
		}
	}
 ?>