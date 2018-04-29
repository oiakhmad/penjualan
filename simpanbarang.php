<?php
include "koneksi.php";

if(isset($_POST['kdbarang'])){
	$kd_barang=$_POST['kdbarang'];
	$nm_barang=$_POST['nmbarang'];
	$harga=$_POST['harga'];
	$stok=$_POST['stok'];

 	$sql="insert into barang values('$kd_barang','$nm_barang','$harga','$stok')";
 	if(mysqli_query($con,$sql)){
 		echo "sukse";
 	}else{
 		echo "gagal".mysqli_error($con);
 	}
}
mysqli_close($con);
?>