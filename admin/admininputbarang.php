 <?php include ("adminheader.php"); ?>
     <div id="wrapper">
       <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12"><br><br><br>
                        <center><h2>Input Suku Cadang</h2></center>
                        <hr>

<form method="post" action="../proses/inputbarang.php" enctype="multipart/form-data">
  <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Barang" name="nama_barang">
    </div>
  </div>
  <br>
  <br>
  <br>

   <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Harga Barang" name="harga_barang">
    </div>
  </div>
  <br>
  <br>

    <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
<select class="form-control" name="nama_vendor" placeholder="Nama Vendor">
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
</select>

    </div>
  </div>
  <br>
  <br>
  <br>


    <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
    <p>Gambar Konten</p>
<input type="file" accept="image/*" name="gambar_barang" class="inputFile">

</div>
</div>


    <br>
  <br> 

 
    <br>
  <br> 

  
  <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
<input type="submit" name="tambah" value="Upload Barang" class="btn btn-default">
    </div>
  </div>
</form>
    <br>
  <br>
<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->




<!-- >>>>>>>>>>>>>>>>>>>>>>>>> -->

<table class="table table-hover">
<tr>
<th>Id</th>
<th>Nama Barang</th>
<th>Vendor Barang</th>
<th>Harga Barang</th>
<th>Action</th>
<th>Action</th>
</tr>   
<?php
$query=mysqli_query($con, "select * from tbl_barang");  //mengambil data tabel mahasiswa dan memasukkan nya ke variabel query
$no=1;  //membuat nomor pada tabel
while($lihat=mysqli_fetch_array($query)){    //mengeluarkan isi data dengan mysql_fetch_array dengan perulangan
?>  
<tr>
<td><?php echo $lihat['id_barang']; ?></td>   <!--menampilkan nomor dari variabel no-->
<td><?php echo $lihat['nama_barang'] ?></td>
<td><?php echo $lihat['nama_vendor'] ?></td>
<td><?php echo $lihat['harga_barang'] ?></td>

<td><a class="btn btn-default" href="../proses/hapusbarang.php?id_barang=<?php echo $lihat['id_barang'] ?>">Hapus</a></td>    <!--membuat link ke file dan hapus.php-->
<td><a class="btn btn-default" href="admineditbarang.php?id_barang=<?php echo $lihat['id_barang'] ?>">Edit</a></td> 
</tr>
<?php
}
?>
</table>
</div>
</div>
</div>
</div>
</div>
