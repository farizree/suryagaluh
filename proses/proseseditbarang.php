<?php
	include 'connect.php';	
	session_start();
	$idb = $_POST['id_barang'];	
	$nama = $_POST['nama_barang'];
	$harga = $_POST['harga_barang'];	
	$nmvendor = $_POST['nmvendor'];
	$gambar = $_POST['gambar_barang'];
	if(empty($idb))
	{
		die("'<script>alert('id konten masih kosong'); window.location = '../admin/adminkonten.php'</script>'");
	}
	else if(empty($nama))
	{
		die("'<script>alert('Nama masih kosong'); window.location = '../admin/adminkonten.php'</script>'");		
	}
	else if(empty($harga))
	{
		die("'<script> alert('Harga Masih Kosong'); window.location = '../admin/adminkonten.php'</script>'");
	}
	else if(empty($nmvendor))
	{
		die("'<script>alert('Nama Vendor Masih Kosong'); window.location = '../admin/adminkonten.php'</script>'");		
	}
	else if(empty($gambar))
	{
		die("'<script>alert('Gambar Masih kosong'); window.location = '../admin/adminkonten.php'</script>'");		
	}
	
	else
	{
		$input = mysqli_query($con, "Update tbl_barang set nama_barang='".$nama."', harga_barang='".$harga."' , nama_vendor='".$nmvendor."',gambar_barang='".$gambar."'where id_barang='".$idb."'");
	
		if ($input)
		{
			$action = "Berhasil Merubah Data Barang";
			header("location:../admin/admininputbarang.php");
		} else {
			echo "gagal";
		}
	}
?>