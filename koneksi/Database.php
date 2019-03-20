<?php 
	/**
	 * 
	 */
	class Database
	{
		private $host = "localhost";
		private $user = "root";
		private $pass = "";
		private $db  = "skripsi";
		protected $koneksi;
		function __construct()
		{
			if (!isset ($this->koneksi)) {
				$this->koneksi = new mysqli($this->host,$this->user,$this->pass,$this->db);
				if (!$this->koneksi) {
					echo "koneksi gagal";
					exit;
				}
			}
			return $this->koneksi;
		}
	}
 ?>