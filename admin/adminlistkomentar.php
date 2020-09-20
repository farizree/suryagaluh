<?php include'adminheader.php'; 
?>
       <div id="wrapper">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12"><br><br><br>
<center><h2>List Komentar</h2></center>
                        <hr>
<!-- >>>>>>>>>>>>>>>>>>>>>>>>> -->

<table class="table table-hover">
<tr>
<th>Id</th>
<th>email user</th>
<th>isi komentar</th>
<th>Action</th>
</tr>   
<?php
$query=mysqli_query($con, "select * from tbl_komentar");  //mengambil data tabel mahasiswa dan memasukkan nya ke variabel query
$no=1;  //membuat nomor pada tabel
while($lihat=mysqli_fetch_array($query)){    //mengeluarkan isi data dengan mysql_fetch_array dengan perulangan
?>  
<tr>
<td><?php echo $lihat['id_komentar']; ?></td>   <!--menampilkan nomor dari variabel no-->
<td><?php echo $lihat['nama_komentar'] ?></td>
<td><?php echo $lihat['komentar'] ?></td>

<td><a class="btn btn-default" href="../proses/hapuskomentar.php?id_komentar=<?php echo $lihat['id_komentar'] ?>">Hapus</a></td>    <!--membuat link ke file dan hapus.php-->
</tr>
<?php
}
?>
</table>