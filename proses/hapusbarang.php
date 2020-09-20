 <?php
include("connect.php");
$query = "delete from tbl_barang where id_barang = '$_GET[id_barang]'";
echo $query;
$result = mysqli_query($con,$query);

if ($result) {
header("location:../admin/admininputbarang.php");
}
else {
echo "proses simpan gagal !.";
}
?>
