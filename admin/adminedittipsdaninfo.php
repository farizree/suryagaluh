 <div id="wrapper">
<?php
include ("adminheader.php");	
		$id = $_GET['id_konten'];
		$query = mysqli_query($con, "select * from tbl_konten where id_konten = '".$id."'");
		$qData = mysqli_fetch_assoc($query);
		?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Admin Surya Galuh</title>
	
	</head>
	<body>
<br><br><br>
	<form class="form-group" method="POST" action="../proses/prosesedittipsdaninfo.php">
						<div class="row">
							<div class="col-sm-2">
								<input readonly="readonly" class="form-control" type="text" name="id_konten" value="<?php echo $qData['id_konten']?>">
							</div>
							<div class="col-sm-6">
								<input class="form-control" type="text" name="judul_konten" value="<?php echo $qData['judul_konten']?>">
							</div>
						</div>
						<br>
						  <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
    <p>Gambar Konten</p>
<input type="file" accept="image/*" name="gambar_konten" class="inputFile" value="<?php echo $qData['gambar_konten']?>"><br>Hi Admin, Upload Gambarnya ukuran Square yah!
</div>
</div><br><br><br>
						<div class="row">
							<div class="col-sm-10">
   								 <div class="col-sm-10 col-sm-offset-1 ">
									<textarea class="ckeditor" name="isi_konten" type="text"><?php echo $qData['isi_konten']; ?>></textarea><br><br>
   								 </div>
							  </div>
							  </div>
							  <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
<input type="submit" value="Simpan" class="btn btn-lg btn-primary" name="submit">
	<a href="admininputtipsdaninfo.php">
    </div>
  </div>
  </a>
  </div>
  </div>
  </form>
					</a>
					</div>
					</div>
					</form>
	</body>
</html>