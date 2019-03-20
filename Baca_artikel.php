<?php 
	include 'themes/header.php';
	include 'modul/Artikel.php';
	$artikel = new Artikel();
	$id = $_GET['id'];
 ?>
 <br>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
 			<div class="card">
                <div class="card-header">Selamat Datang di Komunitas Artikel</div>
                <br>
                <?php foreach ($artikel->get_artikel($id) as $a) {
                ?>
                <div class="shadow-sm p-2 mb-4 white">
                    <h3><?php echo $a['judul']; ?></h3>
                    <p class="text-secondary">penulis : <?php echo $a['penulis']; ?> | <?php echo $a['created_at']; ?><br>Kategori : <?php echo $a['nama']; ?></p>
                    <p class="text-justify"><?php echo $a['content']; ?></p>
                </div>
            <?php } ?>
                <hr>
                <br>
                <div class="row">
                	<div class="col-md-6 text-center">
                		<p>Tidak Ada Komentar</p>
                	</div>
                </div>
                <div class="form-group row p-2">
                	<div class="col-md-6 col-sm-6">
                	<label>Komentar :</label>
                	<textarea class="form-control form-control-md" rows="4"></textarea><br>
  					<div class="text-right">
  						<button class="btn btn-primary">Post</button>
  					</div>
                </div>
                </div>
            </div>
 		</div>
 	</div>

 </div>
</body>
</html>