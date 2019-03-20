<?php include 'themes/header.php';
    include_once 'modul/Artikel.php';
    $artikel = new Artikel();
 ?>
<br>
	<div class="container">
	<div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item active">Topik Artikel</li>
                <?php foreach($artikel->get_all_kategori() as $data){ ?>
                <li class="list-group-item"><a href=""><?php echo $data['nama']; ?></a> <span class="badge badge-light">(10)</span></li>
            <?php } ?>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Selamat Datang di Komunitas Artikel</div>
                <br>
                <?php foreach ($artikel->get_all_artikel() as $a) {
                ?>
                <div class="shadow-sm p-2 mb-4 white">
                    <h3><?php echo $a['judul']; ?></h3>
                    <p class="text-secondary">penulis : <?php echo $a['penulis']; ?> | <?php echo $a['created_at']; ?><br>Kategori : <?php echo $a['nama']; ?></p>
                    <p class="text-justify"><?php echo substr($a['content'],0,600); ?>......<a href="Baca_artikel.php?id=<?php echo $a['id'] ?>">Read More</a></p>
                </div>
            <?php } ?>
                
            </div>
        </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#btn').click(function(){
                alert('d');
            })
        })
    </script>
</body>
</html>