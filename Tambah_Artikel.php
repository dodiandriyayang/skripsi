<?php 
include 'themes/header.php';
include 'modul/Artikel.php';
$artikel = new Artikel();
?>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="isiartikel">
				<form id="form">
					<div class="d-flex">
						<div class="p-2 mr-auto ">
							<input type="text" name="judul" class="form-control" placeholder="Tulis Judul Disini" style="width:350px">    
						</div>
						<div class="p-2">
							<div class="form-group">
								<select id="sel1" class="form-control" name="id_kategori">
									<option>--pilih kategori--</option>
										<?php foreach($artikel->get_all_artikel() as $k){ ?>
										<option value="<?php echo $k['id_kategori'] ?>"><?php echo $k['nama']; ?></option>
										<?php } ?>
									</select>                    
								</div>
							</div>
							<div class="p-2">
								<!-- <button  class="btn btn-success" id="publish">Publish</button> -->
								<input type="submit" name="" value="Simpan" class="btn btn-success">
								<!-- <button  class="btn btn-light" id="tutup">Tutup</button>   -->      
							</div>
						</div>
						<textarea name='content' id="ckditor"></textarea>
						<!-- <p>Post by {{ Auth::user()->name }}</p><input type="hidden" name="penulis" value="{{ Auth::user()->name }}"> -->
					</form>
				</div>
			</div>
		</div>
</div>
<script type="text/javascript">
			$(document).ready(function(){
				CKEDITOR.replace('ckditor');
				$('#btn').on('click',(e)=>{
					alert('k');
				})
			})
		</script>
</body>
</html>
