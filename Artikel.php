<?php 
include 'themes/header.php';
include 'modul/Artikel.php';
$artikel = new Artikel();
?>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="artikel">
				<a href="Tambah_Artikel.php" class="btn btn-success">+ Artikel</a>
				<br>
				<br>
				<h4>Daftar Artikel</h4>
				<table class="table">
					<thead>
						<tr>
							<td>Judul</td>
							<td>Kategori</td>
							<td>Aksi</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach($artikel->get_all_artikel() as $a){ ?>
							<tr>
								<td><?php echo $a['judul']; ?></td>
								<td><?php echo $a['nama']; ?></td>
								<td><a href="edit_artikel.php?id=<?php echo $a['id'] ?>" class="btn btn-primary btn-sm">Edit</a> | 
									<a href="" class="btn btn-danger btn-sm">Delete</a></td>
							</tr>
							<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
	<script type="text/javascript">
		$(document).ready(function(){
			var url = "http://localhost/Tambah_Artikel.php";
			$('#addartikel').click(function(){
				alert('k');
			})
		})
	</script>
</body>
</html>