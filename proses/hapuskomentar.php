 <?php
include("connect.php");
$query = "delete from tbl_komentar where id_komentar = '$_GET[id_komentar]'";
echo $query;
$result = mysqli_query($con,$query);

if ($result) {
header("location:../admin/adminlistkomentar.php");
}
else {
echo "proses simpan gagal !.";
}
?>