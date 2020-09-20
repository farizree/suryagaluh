 <?php
include("connect.php");
$query = "delete from tbl_login where email_web = '$_GET[email_web]'";
echo $query;
$result = mysqli_query($con,$query);

if ($result) {
header("location:../admin/adminlistuser.php");
}
else {
echo "proses simpan gagal !.";
}
?>