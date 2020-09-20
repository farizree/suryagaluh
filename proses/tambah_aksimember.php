<?php
	include 'connect.php';	
	
	session_start();	
	$nama = $_POST['nama_web'];
	$username = $_POST['email_web'];
	$password = $_POST['password_web'];
	$jabatan = $_POST['jabatan'];
	
	if(empty($nama))
	{
		die("'<script>alert(' nama masih kosong'); window.location = '../tambahmember.php'</script>'");		
	}
	else if(empty($username))
	{
		die("'<script>alert('username masih kosong'); window.location = '../tambahmember.php'</script>'");
	}
	else if(empty($password))
	{
		die("'<script>alert('password masih kosong'); window.location = '../tambahmember.php'</script>'");
	}
	
	else
	{
		$input = mysqli_query($con,"INSERT INTO tbl_login (nama_web, email_web, password_web, jabatan) 
			  VALUES ('$nama','$username','$password','$jabatan')");
	
		if ($input)
		{
			$action = "Berhasil Menambah Data Member";
			header("location:../login.php");
		} else {
			echo "Email yang anda gunakan, sudah terdaftar! Kembali";
		}
	}
?>