<?php
include "koneksi.php";

if(isset($_POST['kdbarang'])){
	$kd_barang=$_POST['kdbarang'];
	$nm_barang=$_POST['nmbarang'];
	$harga=$_POST['harga'];
	$stok=$_POST['stok'];

	$sql="update barang set nm_barang='$nm_barang', harga='$harga', stok='$stok' where kd_barang='$kd_barang'";
	
	if(mysqli_query($con,$sql)){
		echo "sukses";
	} else{
		echo "gagal".mysqli_error($con);
	}
}
?>