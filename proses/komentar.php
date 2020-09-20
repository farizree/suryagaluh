<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('connect.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id_konten		= $_POST['id_konten'];
	$nama_komentar	= $_POST['nama_komentar'];	//membuat variabel $nis dan datanya dari inputan NIS
	$komentar		= $_POST['komentar'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($con, "INSERT INTO tbl_komentar VALUES('$id_konten' ,NULL, '$nama_komentar', '$komentar')") or die(mysqli_error());
	echo $input;
	
	//jika query input sukses
	if($input){
		
		echo 'Terimakasih telah memberikan komentar positif diwebsite ini! ';		//Pesan jika proses tambah sukses
		echo '<a href="../indexuser.php"> Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../indexuser.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>