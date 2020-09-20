<?php include ("proses/connect.php"); 
	  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="">
	
	<title>Surya Galuh</title>
</head>
<?php include ("header/header.php"); ?>
<body>
	<!-- Fixed navbar -->
	
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>
<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="tambahmember.php">Daftar</a></li>
			<li class="active">Daftar</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Daftar</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Daftar akun baru</h3>
							<p class="text-center text-muted">Jika anda sudah mendaftar sebelumnya, sihlakan langsung login <a href="login.php">Login</a></p>
							<hr>

							 <FORM action="proses/tambah_aksimember.php" method="post">
								<div class="top-margin">
									<label>Email Anda</label>
									<input type="email" class="form-control" name="email_web" placeholder="EMAIL" required=""><br>
								</div>
								<div class="top-margin">
									<label>Nama Anda<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="nama_web" placeholder="Nama" required=""><br>
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Password <span class="text-danger">*</span></label>
										<input type="password" class="form-control" name="password_web" placeholder="Password" required=""><br>
									</div>
									<div class="col-sm-6">
										<label>Anda merupakan User<span class="text-danger">*</span></label>
										<input readonly="" type="text" class="form-control" name="jabatan" value="user" required=""><br>
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-4 text-right">
										<INPUT TYPE="SUBMIT" VALUE="SUBMIT" CLASS="btn btn-action" NAME="SUBMIT">
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->

	<a href="indexuser.php" class="A">
	<footer id="footer" class="top-space">
		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								Copyright &copy; 2014, Surya Galuh</a> 
							</p>
						</div>
					</div>
				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	</body>
</html>