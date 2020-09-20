<?php include ("proses/connect.php"); ?>
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
			<li><a href="index.html">Home</a></li>
			<li class="active">User access</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Login</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Login to your account</h3>
							<p class="text-center text-muted">Jika anda belum mendaftar diwebsite ini, maka anda harus mendaftar terlebih dahulu! <a href="tambahmember.php">Daftar</a></p>
							<hr>
							
							<form method="post" action="proses/proseslogin.php">
								<div class="top-margin">
									<label>Email <span class="text-danger">*</span></label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" id="email_web" name="email_web">
								</div>
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									 <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" id="password_web" name="password_web">
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-4 text-right">
										 <button type="submit" class="btn btn-default">Submit</button>
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

	<footer id="footer" class="top-space">
		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								Copyright &copy; 2016, Surya Galuh</a> 
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