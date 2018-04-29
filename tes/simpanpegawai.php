<?php
include "koneksi.php";

if (isset($_POST['kodepegawai'])){

	$kd_pegawai=$_POST['kodepegawai'];
	$nm_pegawai=$_POST['namapegawai'];
$sql="insert into pegawai values('$kd_pegawai','$nm_pegawai','','','','','')";

if(mysqli_query($con,$sql)){
	echo "sukses";
}else{
	echo "gagal".mysqli_error($con);
}
}
mysqli_close($con);

?>
