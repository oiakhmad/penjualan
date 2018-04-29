<?php 
include "koneksi.php";
//pegawai
$sql="delete from pegawai where kd_pegawai='".$_GET['kd_pegawai']."'";
$result=mysqli_query($con,$sql);

//barang
$sqlb="delete from barang where kd_barang='".$_GET['kd_barang']."'";
$results=mysqli_query($con,$sqlb);
//$sqlb=mysqli_query("delete from barang where kd_barang='".$_GET['kd_barang']."'");

// if(mysqli_query($con,$sql)){
// 	echo "sukses ee";
// }else {
// 	echo "gagal".mysqli_error($con);
// }
?>