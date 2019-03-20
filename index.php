<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
		<div class="row">
			<div class="col-md-12">
				<div class="d-flex justify-content-center" style="margin-top: 210px">
				<form action="login.php?aksi=masuk" method="post">
					<div class="form-group">
						<label>username</label>
						<input type="text" name="username" class="form-control" style="width: 300px" required="">
					</div>
					<div class="form-group">
						<label>password</label>
						<input type="password" name="password" class="form-control" style="width: 300px" required="">
					</div>
					<div class="text-center">
					<button type="submit" class="btn btn-primary" id="btn">MASUK</button>
				</div>
				</form>	
			</div>
			</div>
		</div>
	</div>
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$('form').submit(function(){
				$.ajax({
					url : $(this).attr("action"),
					data : $(this).serialize(),
					type : $(this).attr("method"),
					dataType : 'html',
					beforeSend : function(){
						$('#btn').attr('value','tunggu');
					},
					success : function(pesan){

					}
				})
			})
		})
	</script> -->
</body>
</html>