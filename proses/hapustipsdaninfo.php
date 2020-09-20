 <?php
include("connect.php");
$query = "delete from tbl_konten where id_konten = '$_GET[id_konten]'";
echo $query;
$result = mysqli_query($con, $query);

if ($result) {
header("location:../admin/admininputtipsdaninfo.php");
}
else {
echo "proses simpan gagal !.";
}
?>
