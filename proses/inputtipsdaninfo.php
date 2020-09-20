<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('connect.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$gambar_konten=$_FILES['gambar_konten'] ['name'];	
 	$lokasi=$_FILES['gambar_konten'] ['tmp_name']; 
 	$lokasitujuan="../gambar_gallery";
 	$upload=move_uploaded_file($lokasi,$lokasitujuan."/".$gambar_konten);
	$judul_konten		= $_POST['judul_konten'];	//membuat variabel $nis dan datanya dari inputan NIS
	$isi_konten			= $_POST['isi_konten'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query("INSERT INTO tbl_konten VALUES(NULL, '$judul_konten', '$isi_konten','$gambar_konten')") or die(mysqli_error());
	header("location:../admin/admininputtipsdaninfo.php");
	//jika query input sukses
	if($input){
		

		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../admin/admininputtipsdaninfo.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo 'sadasd';
 
}
?>