<?php include "connect_db_sman_3_waeapo.php";
$nip           = $_POST['nip'];
$nama_guru     = $_POST['nama_guru'];
$alamat        = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp          = $_POST['telp'];
$status        = $_POST['status'];

$rs=mysql_fetch_array(mysql_query("select * from guru where nip='$nip'"));
if ($rs)
{
	echo "<script>alert('nip Sudah Ada');</script>";
	include 'insert_Guru.php';
}
else
{
	$query = "insert into guru values ($nip,'$nama_guru','$alamat','$jenis_kelamin','$telp','$status')";
	$hasil = mysql_query($query) or die(mysql_error());
	header('Location:dGuru.php');
}

?>