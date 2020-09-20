<?php include ("proses/connect.php"); 
session_start();
if (isset($_SESSION['logged']))
{
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
<?php include ("header/headeruser.php"); ?>
<body class="home">
	<!-- Fixed navbar -->
	<!-- /.navbar -->
	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">Surya Galuh </h1>
				<p class="tagline">Bengkel motor murah dan terpercaya</p>
			</div>
		</div>
	</header>
	<!-- /Header -->
	<div class="jumbotron top-space">
					<div class="container">
		<h3 class="text-center thin">Tips & Info</h3>
			
	<!-- Article -->

	 <?php
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysqli_query($con, "SELECT * FROM tbl_konten ORDER BY id_konten ASC") or die(mysqli_error());
    
    //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    if(mysqli_num_rows($query) == 0){  //ini artinya jika data hasil query di atas kosong
      
      
    }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
      
      //jika data tidak kosong, maka akan melakukan perulangan while
      while($data = mysqli_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database
        
        //menampilkan row dengan data di database
?>
<!-- Highlights - jumbotron -->
				<div class="col-md-4 col-sm-6 highlight">
					<img src="gambar_gallery/<?=$data['gambar_konten'];?>" alt="...">
					<div class="h-caption"><h3><?php echo $data['judul_konten'] ;?><h3></div>
					<div class="h-body text-center">
						<p><?php echo substr($data['isi_konten'], 1,180) ;?></p>
        <p><a href="tipsdaninfologin.php?id_konten=<?php echo $data['id_konten'] ?>" class="btn btn-primary" role="button">Baca Selengkapnya</a></p>
					</div>
				</div>
				<!-- /row  -->
		
	<?php } } ?>
	<!-- /Highlights -->
	<</h3></h3></div></div></div>
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p> Iwan : +6281384232312<br>
								<a href="mailto:#">suryagaluh1928@gmail.com</a><br>
								<br>
								Jl. Raya Pabuaran No 78 Bojong Gede, Indonesia
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href="https://twitter.com/suryagaluh28"><i class="fa fa-twitter fa-2"></i></a>
								<a href="https://www.instagram.com/suryagaluh_/"><i class="fa fa-instagram fa-2"></i></a>
								<a href="https://www.facebook.com/bengkelsuryagaluh"><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h4 class="widget-title">About Us</h4>
						<div class="widget-body">
							<p>Surya Galuh merupakan bengkel motor yang berada di wilayah Citayam. Berdiri sejak tahun 1995 membuat kami dipercaya sebagai bengkel motor terbaik hingga saat ini. Peralatan di bengkel kami sudah seperti bengkel - bengkel resmi.</p>
							<p>Kami melayani berbagai macam tipe motor di bengkel Surya Galuh. Pelayanan adalah yang paling utama kepada pelanggan - pelanggan kami.
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

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
<?php 
}
else
{ 
die ("'<script>alert('anda harus login'); window.location = 'login.php'</script>'");
}
?>