<?php
include "connect_db_sman_3_waeapo.php";

$nip           = $_POST['nip'];
$nama          = $_POST['nama_guru'];
$alamat        = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp          = $_POST['telp'];
$status        = $_POST['status'];

$query = "UPDATE guru SET nama_guru='$nama',alamat='$alamat', jenis_kelamin='$jenis_kelamin', telp='$telp',status='$status' WHERE nip='$nip'";
$update = mysql_query($query) or die("query error...!!");

if($update){
header("Location:dGuru.php");
}
?>