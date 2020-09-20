<?php include'adminheader.php'; 
?>
       <div id="wrapper">
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12"><br><br><br>
<center><h2>List Daftar User</h2></center>
                        <hr>
<!-- >>>>>>>>>>>>>>>>>>>>>>>>> -->

<table class="table table-hover">
<tr> 
<th>Email </th>
<th>Nama </th>
<th>Password </th>
<th>Jabatan</th>
<th>Action</th>
</tr>   
<?php
$query=mysqli_query($con, "select * from tbl_login");  //mengambil data tabel mahasiswa dan memasukkan nya ke variabel query
$no=1;  //membuat nomor pada tabel
while($lihat=mysqli_fetch_array($query)){    //mengeluarkan isi data dengan mysql_fetch_array dengan perulangan
?>  
<tr>
  <!--menampilkan nomor dari variabel no-->
<td><?php echo $lihat['email_web'] ?></td>
<td><?php echo $lihat['nama_web'] ?></td>
<td><?php echo $lihat['password_web'] ?></td>
<td><?php echo $lihat['jabatan'] ?></td>
<td><a class="btn btn-default" href="../proses/hapuslistuser.php?email_web=<?php echo $lihat['email_web'] ?>">Hapus</a></td> 
   <!--membuat link ke file dan hapus.php-->
</tr>
<?php
}
?>
</table>