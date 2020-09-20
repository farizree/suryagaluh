<?php 
include ("proses/connect.php");
session_start();
if (isset($_SESSION['logged']))
{
  
  $jabatan= $_SESSION['jabatan'];
  if($jabatan =='user')
      {
        if (isset($_SESSION['email_web']))
        {

        }
}
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


<!-- JUMBOTRON -->
<header id="head">
    <div class="container">
      <div class="row">
        <h1 class="lead">Surya Galuh </h1>
        <p class="tagline">Bengkel motor murah dan terpercaya</p>
      </div>
    </div>
  </header><br><br>
<!-- JUMBOTRON -->

<div class="row">

<div class="col-sm-3 col-md-3">
<div class="list-group">
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
  <a href="tipsdaninfologin.php?id_konten=<?php echo $data['id_konten'] ?>" class="list-group-item"><?php echo $data['judul_konten'] ;?></a>
<?php } } ?>
</div>
</div>

<div class="col-md-9">
<?php
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysqli_query($con, "SELECT * FROM tbl_konten where id_konten='$_GET[id_konten]'") or die(mysqli_error());
    
    //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    if(mysqli_num_rows($query) == 0){  //ini artinya jika data hasil query di atas kosong
      
      
    }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
      
      //jika data tidak kosong, maka akan melakukan perulangan while
      while($data = mysqli_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database
        
        //menampilkan row dengan data di database
?>
<div class="panel panel-default">
  <div class="panel-body">
<h1><center><?php echo $data['judul_konten'] ;?></center></h1>
  <div class="col-sm-8 col-md-8 col-md-offset-2">
    <div class="thumbnail">
      <img width="500" height="500"  src="gambar_gallery/<?=$data['gambar_konten'];?>" alt="...">
    </div>                              
  </div>
  <div class="col-md-10 col-md-offset-1">

 <p id=""><?php echo $data['isi_konten'] ;?></p>
          

  </div>
  </div>

</div><?php } } ?>
</div>
</div>

<div class="row">
<div class="col-md-9 col-md-offset-3">
<div class="panel panel-default">
  <div class="panel-body">
  <div class="row">
 <div class="col-md-12">
 <?php

    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysqli_query($con, "SELECT * FROM tbl_komentar where id_konten='$_GET[id_konten]' ORDER BY id_konten ASC") or die(mysqli_error());
    
    //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    if(mysqli_num_rows($query) == 0){  //ini artinya jika data hasil query di atas kosong
      
      
    }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
      
      //jika data tidak kosong, maka akan melakukan perulangan while
      while($data = mysqli_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database
        
        //menampilkan row dengan data di database
?>
  <h4><?php echo $data['nama_komentar'] ;?></h4>
  <p><?php echo $data['komentar'] ;
  ?></p>

      

<hr>
<?php } } ?>

<?php
 if(array_key_exists('id_konten', $_GET)) {
     $id_konten = (int) $_GET['id_konten'];
 }
 ?>
<form method="post" action="proses/komentar.php">
<div class="row">
  <div class="col-md-12">
    <input readonly="" type="text" class="form-control" placeholder="Nama Anda" name="nama_komentar" value="<?php echo $_SESSION['email_web']?>">
  </div>
</div>
<br>
<textarea class="form-control" rows="3" placeholder="Komentar Anda" name="komentar"></textarea>

<br>
<input type="hidden" name="id_konten" value="<?php echo $id_konten; ?>">
<center>
 <button name="tambah" type="submit" class="btn btn-default">Tambahkan Komentar</button>
 </center>
 </div>
 </form>     
</div>
</div>
</div>
</div>
</div>
</div>
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

</body>
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="assets/js/headroom.min.js"></script>
  <script src="assets/js/jQuery.headroom.min.js"></script>
  <script src="assets/js/template.js"></script>
</html>
<?php 
}
else
{ 
die ("'<script>alert(anda harus login); window.location = 'login.php'</script>'");
}
?>