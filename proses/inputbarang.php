<?php
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('connect.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$gambar_barang=$_FILES['gambar_barang'] ['name'];	
 	$lokasi=$_FILES['gambar_barang'] ['tmp_name']; 
 	$lokasitujuan="../gambar_gallery";
 	$upload=move_uploaded_file($lokasi,$lokasitujuan."/".$gambar_barang);

	$nama_barang		= $_POST['nama_barang'];
	//membuat variabel $nis dan datanya dari inputan NIS
	$nama_vendor		= $_POST['nama_vendor'];
		$harga_barang		= $_POST['harga_barang'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysqli_query($con,"INSERT INTO tbl_barang VALUES(NULL, '$nama_barang', '$nama_vendor', '$harga_barang', '$gambar_barang')") or die(mysqli_error());
	echo $input;
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		//Pesan jika proses tambah sukses
		echo '<a href="../admin/admininputbarang.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="../admin/admininputbarang.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>