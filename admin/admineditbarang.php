 <div id="wrapper">
<?php
include ("adminheader.php");	
		$lihat = $_GET['id_barang'];
		$query = mysqli_query($con, "select * from tbl_barang where id_barang = '".$lihat."'");
		$qData = mysqli_fetch_assoc($query);
		?>

 <html>
	<head>
		<title>Admin Surya Galuh</title>
	
	</head>
	<body>
<form method="post" action="../proses/proseseditbarang.php">
<div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4"><br><br><br>
<h1> Admin Edit Suku Cadang</h1>
    </div>
  </div><br><br><br>
  
    <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input readonly="readonly" class="form-control" type="text" name="id_barang" value="<?php echo $qData['id_barang']?>">
    </div>
  </div><br><br><br>

  <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Nama Barang:</label>
      <input class="form-control" type="text" name="nama_barang" value="<?php echo $qData['nama_barang']?>">
    </div>
  </div><br><br>


<div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Nama Vendor:</label>
<select class="form-control" name="nmvendor" placeholder="Nama Vendor">
     <?php
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysqli_query($con, "SELECT nama_vendor FROM tbl_vendor ORDER BY id_vendor ASC") or die(mysqli_error());
    
    //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    if(mysqli_num_rows($query) == 0){  //ini artinya jika data hasil query di atas kosong
      
      
    }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
      
      //jika data tidak kosong, maka akan melakukan perulangan while
      while($data = mysqli_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database
        
        //menampilkan row dengan data di database
?>
  <option><?php echo $data['nama_vendor'] ;?></option>

  <?php } } ?>
</select></div></div><br><br>

 <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
    <label for="pwd">Harga Barang:</label>
      <input class="form-control" type="text" name="harga_barang" value="<?php echo $qData['harga_barang']?>">
    </div>
  </div>
  <br>
  <br>
  <br>
    <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
    <p>Gambar Konten</p>
<input type="file" accept="image/*" name="gambar_barang" class="inputFile" value="<?php echo $qData['gambar_barang']?>">
</div>
</div>


    <br>
  <br> 

 
    <br>
  <br> 

  
  <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
<input type="submit" value="Simpan" class="btn btn-lg btn-primary" name="submit">
	<a href="admininputbarang.php">
    </div>
  </div>
</form>
    <br>
  <br>



<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->


					</a>
					</div>
					</div>
					</body>
					</html>
					