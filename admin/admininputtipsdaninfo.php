<?php include'adminheader.php'; 
?>
       <div id="wrapper">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12"><br><br><br>
                        <center><h2>INPUT KONTEN</h2></center>
                        <hr>

<form method="post" action="../proses/inputtipsdaninfo.php" enctype="multipart/form-data">
  <div class="form-group">          
    <div class="col-sm-4 col-sm-offset-4">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Judul Konten" name="judul_konten">
    </div>
  </div>
  <br>
  <br>
  <br>
  <div class="form-group">
    <div class="col-sm-10 col-sm-offset-1 ">
<textarea class="ckeditor" name="isi_konten"></textarea>
    </div>
  </div>
    <br>
  <br>
      <br>
  <br>

    <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
    <p>Gambar Konten</p>
<input type="file" accept="image/*" name="gambar_konten" class="inputFile">

</div>
</div>
    <br>
  <br> 

 
    <br>
  <br> 

  
  <div class="form-group">
    <div class="col-sm-4 col-sm-offset-4">
<input type="submit" name="tambah" value="Upload Konten" class="btn btn-default">
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
<th>Judul Konten</th>
<th>isi Konten</th>
<th>Action</th>
<th>Action</th>
</tr>   
<?php
$query=mysqli_query($con, "select * from tbl_konten");  //mengambil data tabel konten dan memasukkan nya ke variabel query
$no=1;  //membuat nomor pada tabel
while($lihat=mysqli_fetch_array($query)){    //mengeluarkan isi data dengan mysql_fetch_array dengan perulangan
?>  
<tr>
<td><?php echo $lihat['id_konten']; ?></td>   <!--menampilkan nomor dari variabel no-->
<td><?php echo $lihat['judul_konten'] ?></td>
<td><?php echo $lihat['isi_konten'] ?></td>

<td><a class="btn btn-default" href="../proses/hapustipsdaninfo.php?id_konten=<?php echo $lihat['id_konten'] ?>">Hapus</a></td>  
<!--membuat link ke file dan hapus.php-->
<td><a class="btn btn-default" href="adminedittipsdaninfo.php?id_konten=<?php echo $lihat['id_konten'] ?>">Edit</a></td> 
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