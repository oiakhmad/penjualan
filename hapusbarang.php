<?php
include "koneksi.php";


$sqlb="delete from barang where kd_barang='".$_GET['kd_barang']."'";
$resul=mysqli_query($con,$sql);
if(mysqli_query($con,$sqlb)){
	echo "sukses";
}else {
	echo "gagal".mysqli_error($con);
}
?>
