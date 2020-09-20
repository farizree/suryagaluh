<?php
	include 'connect.php';	
	session_start();
	$id = $_POST['id_konten'];	
	$judul = $_POST['judul_konten'];
	$isi = $_POST['isi_konten'];
	$gambar = $_POST['gambar_konten'];
	
	if(empty($id))
	{
		die("'<script>alert('id konten masih kosong'); window.location = '../admin/admininputtipsdaninfo.php'</script>'");
	}
	else if(empty($judul))
	{
		die("'<script>alert('Nama masih kosong'); window.location = '../admin/admininputtipsdaninfo.php'</script>'");		
	}
	else if(empty($isi))
	{
		die("'<script> alert('isi masih kosong'); window.location = '../admin/admininputtipsdaninfo.php'</script>'");
	}
	else if(empty($gambar))
	{
		die("'<script>alert('Gambar Masih kosong'); window.location = '../admin/admininputtipsdaninfo.php'</script>'");		
	}
	
	else
	{
		$input = mysqli_query($con, "Update tbl_konten set id_konten='".$id."', judul_konten='".$judul."', isi_konten='".$isi."', gambar_konten='".$gambar."' where id_konten='".$id."'");
	
		if ($input)
		{
			$action = "Berhasil Merubah Data Konsumen";
			header("location:../admin/admininputtipsdaninfo.php");
		} else {
			echo "gagal";
		}
	}
?>