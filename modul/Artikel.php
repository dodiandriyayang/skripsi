<?php 
	include 'koneksi/Database.php';

	/**
	 * 
	 */
	class Artikel extends Database
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function get_all_artikel()
		{
			$query = $this->koneksi->query(
				"SELECT artikel.penulis,artikel.judul,artikel.id,kategori.nama,artikel.content,artikel.created_at FROM artikel join kategori on artikel.id_kategori = kategori.id_kategori ORDER BY id DESC"
			);
			if ($query==false) {
				return false;
			}
			$tampil = array();
			while ($row = $query->fetch_assoc()) {
				$tampil[]=$row;
			}
			return $tampil;
		}

		function get_all_kategori()
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

		function get_artikel($id)
		{
			$query = $this->koneksi->query(
				"SELECT artikel.penulis,artikel.judul,artikel.id,kategori.nama,artikel.content,artikel.created_at FROM artikel join kategori on artikel.id_kategori = kategori.id_kategori WHERE id='$id'"
			);
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