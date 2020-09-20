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
 <?php
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
   $query = mysqli_query($con, "SELECT * FROM tbl_barang where nama_vendor='$_GET[nama_vendor]' ORDER BY id_barang ASC") or die(mysqli_error());    
    //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    if(mysqli_num_rows($query) == 0){  //ini artinya jika data hasil query di atas kosong
      
      
    }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
      
      //jika data tidak kosong, maka akan melakukan perulangan while
      while($data = mysqli_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database
        
        //menampilkan row dengan data di database
?>

  <div class="col-sm-4 col-md-4">
    <div class="thumbnail">
<img src="gambar_gallery/<?=$data['gambar_barang'];?>" alt="...">
      <div class="caption">
      <center>
        <h4>Nama Barang : <?php echo $data['nama_barang'] ;?></h3>
        <h4>Nama Vendor : <?php echo $data['nama_vendor'] ;?></h4>
        <p>Harga : <?php echo $data['harga_barang'] ;
  ?></p>
  </center>
      </div>
    </div>
  </div>
    <?php } } ?>    
</div>
</div>
</div>
	<!-- Article -->

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